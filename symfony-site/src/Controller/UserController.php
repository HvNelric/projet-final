<?php

namespace App\Controller;

use App\Entity\User;
use http\Env\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use JMS\Serializer\SerializerBuilder;

class UserController extends Controller
{
    /**
     * @Route("/user")
     */
    public function index()
    {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(User::class);
        $users = $repository->find('18');

        dump($users);

        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());


        $serializer = SerializerBuilder::create()->build();
        $jsonContent = $serializer->serialize($users, 'json');
        dump($users);
        dump($jsonContent);


        return $this->render('user/index.html.twig', [
            'users' => $users,

        ]);
    }


}
