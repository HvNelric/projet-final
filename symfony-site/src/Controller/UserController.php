<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends Controller
{
    /**
     * @Route("/user")
     */
    public function index()
    {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(User::class);
        $users = $repository->findall();

//        $json = [];
//        foreach( $users as $user) {
//            $user_tab = ['id' => $user->getId(),
//                'name' => $user->getNom(),
//                'prenom' => $user->getPrenom(),
//                'age' => $user->getAge()
//            ];
//            $json[] = $user_tab;
//        }
//
//        return new JsonResponse($json);



        //$jserialize();sonContent = $users->

        //$return_json = json_encode($users);

        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);

        $jsonContent = $serializer->serialize($user, 'json');

        dump($jsonContent);



//        return $this->render('user/index.html.twig', [
//
//        ]);
    }
}