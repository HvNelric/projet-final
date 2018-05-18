<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\InscriptionType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Class ProfilController
 * @Route("/profil")
 */
class ProfilController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {

        $userLogged = $this->getUser();

        return $this->render('logged/index.html.twig',
            [
                'userLogged' => $userLogged
            ]
        );
    }

    /**
     * @Route("/edit")
     */
    public function edit(Request $request, UserPasswordEncoderInterface $passwordEncoder) {

       $form = $this->createForm(InscriptionType::class);
       $form->handleRequest($request);

       $user = $this->getUser();
       dump($user->getProfilImg());

       if($form->isSubmitted()) {
           if($form->isValid()) {

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

               $this->addFlash('succes', 'Votre a été modifié');
               return $this->redirectToRoute('app_profil_index');
           } else {
               $this->addFlash('error', 'Le formulaire contient des erreurs');
           }
       }


        return $this->render(
            'logged/edit.html.twig',
            [
                'form' => $form->createView(),
                'user' => $user
            ]
        );
    }

}
