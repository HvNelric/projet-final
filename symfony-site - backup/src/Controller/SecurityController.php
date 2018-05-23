<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\InscriptionType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    /**
     * @Route("/inscription")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();
        $form = $this->createForm(InscriptionType::class, $user);
        $form->handleRequest($request);


        if($form->isSubmitted()) {
            if ($form->isValid()) {

                /**
                 * @var UploadedFile|null
                 */
                $image = $user->getProfilImg();

                if(!is_null($image)) {

                    $filename = uniqid() . '.' . $image->guessExtension();

                    $image->move(
                        $this->getParameter('upload_dir'),
                        $filename
                    );

                    $user->setProfilImg($filename);
                }

                $password = $passwordEncoder->encodePassword(
                    $user,
                    $user->getPlainPassword()
                );
                $user->setPassword($password);
                dump($user);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                $this->addFlash('succes', 'Votre compte est crée');
                return $this->redirectToRoute('app_index_index');

            } else {
                $this->addFlash('error', 'Le formulaire contient des erreurs');
            }
        }

        return $this->render(
            'security/register.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }

    /**
     * @Route("/login")
     */
    /*
    public function login(AuthenticationUtils $auth) {
        $error = $auth->getLastAuthenticationError();
        $lastUsername = $auth->getLastUsername();

        dump($auth);

        if (!empty($error)) {
            $this->addFlash('error', 'Identifiants incorrects');
        }
        dump($lastUsername);
        return $this->render(
            'security/login.html.twig',
            [
                'last_username' => $lastUsername
            ]
        );
    }*/
    public function login(Request $request, AuthenticationUtils $authenticationUtils) {
        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        dump($error);

        return $this->render(
            'security/login.html.twig',
            [
                'last_username' => $lastUsername,
                'error'         => $error
            ]
        );
    }
}
