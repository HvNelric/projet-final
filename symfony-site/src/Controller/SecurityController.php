<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\InscriptionType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonDecode;

use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Csrf\TokenStorage\TokenStorageInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

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


        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                /**
                 * @var UploadedFile|null
                 */
                $image = $user->getProfilImg();

                if (!is_null($image)) {

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
     * @Route("/registerr")
     */
    public function registerR(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        if ($request->isMethod('POST')) {
            echo 'ok';

            $data = json_decode($request->getContent());

            //$data = $request->request->all();

            $user = new User();
            $id = $user->getId();

            $user->setEmail($data->email)
                 ->setPrenom($data->prenom)
                ->setNom($data->nom)
                ->setSexe($data->sexe)
                ->setAge($data->age)
                ->setDateDispo($data->date_dispo)
                ->setDateFin($data->date_fin);

            /**
             * @var UploadedFile|null
             */
            $image = $data->image();

            if (!is_null($image)) {

                $filename = uniqid() . '.' . $image->guessExtension();

                $image->move(
                    $this->getParameter('upload_dir'),
                    $filename
                );

                $user->setProfilImg($filename);
            }

            $password = $passwordEncoder->encodePassword(
                $user,
                $data->password
            );
            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return new Response(
                "C'est bonbon",
                Response::HTTP_OK,
                ['Content-type' => 'application/json']
            );
        }


        return new Response('NOT OK');
    }


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
    /**
     * @Route("/inscriptiontest")
     */
    public function registerTest(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        if ($request->isMethod('POST')) {
            echo 'post ok';

            $json = json_decode($request->getContent());

            $data = [

            ];


        }
        die();
    }

    /**
     * @Route("/login")
     */
    public function login(Request $request, AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        dump($error);

        return $this->render(
            'security/login.html.twig',
            [
                'last_username' => $lastUsername,
                'error' => $error
            ]
        );
    }


    /**
     * @Route("/loginr")
     */
    public function loginr(Request $request)
    {

        $data = json_decode($request->getContent());
        $user = $this->getUser();


//        $_username = $data->username;
//        $_password = $data->password;
//    dump($data->username, $data->password);
//        // Retrieve the security encoder of symfony
//        $factory = $this->get('security.encoder_factory');
//
//        /// Start retrieve user
//        // Let's retrieve the user by its username:
//        $user = $this->getDoctrine()->getManager()->getRepository(User::class)
//            ->findOneBy(['email' => $_username]);
//        /// End Retrieve user
//
//        // Check if the user exists !
//        if (!$user) {
//            return new Response(
//                "L'email n'existe pas",
//                Response::HTTP_UNAUTHORIZED,
//                ['Content-type' => 'application/json']
//            );
//        }
//
//        /// Start verification
//        $encoder = $factory->getEncoder($user);
//        $salt = $user->getSalt();
//
//        if (!$encoder->isPasswordValid($user->getPassword(), $_password, $salt)) {
//            return new Response(
//                'Email non valide',
//                Response::HTTP_UNAUTHORIZED,
//                ['Content-type' => 'application/json']
//            );
//        }
//
//        $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
//        $this->get('security.token_storage')->setToken($token); //
//
//
//        $this->get('session')->set('_security_main', serialize($token));
//
//        $event = new InteractiveLoginEvent($request, $token);
//        $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);
//
//        /*
//         * Now the user is authenticated !!!!
//         * Do what you need to do now, like render a view, redirect to route etc.
//         */

        return new Response(
            'Bienvenue ' . $user->getPrenom(),
            Response::HTTP_OK,
            ['Content-type' => 'application/json']
        );
    }
}

//        $user = $this->$this->getUser();
//
//        $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
//        $this->container->get('security.token_storage')->setToken($token);
//        $this->container->get('session')->set('_security_main', serialize($token));

//        return new Response(sprintf('Logged in as %s', $this->getUser()->getPrenom()));
//


