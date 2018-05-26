<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * Class UserController
 * @package App\Controller
 *
 */
class UserController extends Controller
{
    /**
     * @Route("/user")
     */
    public function index()
    {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(User::class);
        $users = $repository->findAll();



        $json = [];
        foreach( $users as $user) {
            $user_tab = ['id' => $user->getId(),
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'age' => $user->getAge(),
                'image' => $user->getProfilImg()
            ];
            $json[] = $user_tab;
        }

        return new JsonResponse($json);



        //$jserialize();sonContent = $users->

        //$return_json = json_encode($users);

//        $encoders = array(new XmlEncoder(), new JsonEncoder());
//        $normalizers = array(new ObjectNormalizer());
//
//        $serializer = new Serializer($normalizers, $encoders);
//
//        $jsonContent = $serializer->serialize($user, 'json');
//
//        dump($jsonContent);

//        return $this->render('user/index.html.twig', [
//
//        ]);
    }

    /**
     * @param $id
     * @Route("/user/{id}")
     */
    public function userById($id) {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(User::class);
        $user = $repository->findAll();

        $json = [
            'id' => $user->getId(),
            'nom' => $user->getNom(),
            'prenom' => $user->getPrenom(),
            'age' => $user->getAge()
        ];

        dump($json);
        return new JsonResponse($json);

    }

    /**
     * @Route("/userlogged")
     */
    public function userLogged() {

        $userLogged = $this->getUser();

        $json = [
            $user_tab = [
                'id' => $userLogged->getId(),
                'prenom' => $userLogged->getPrenom(),
                'image' => $userLogged->getProfilImg()
            ]
        ];

        return new JsonResponse($json);
    }

    /**
     * @Route("/test")
     */
    public function test(Request $request)
    {

        $postJson = json_decode($request->getContent());

        $json = [
            'email' => $postJson->email,
            'pwd' => $postJson->password
        ];

        return $postJson;
    }
}