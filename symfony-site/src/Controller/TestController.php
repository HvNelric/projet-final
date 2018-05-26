<?php

namespace App\Controller;

use App\Entity\Activites;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    /**
     * @Route("/test")
     */
    public function addActR(Request $request)
    {
        if ($request->isMethod('POST')) {
            echo 'ok';

            $data = $request->getContent();

            dump($data);

            //$data = $request->request->all();
            $postJson = json_decode($request->getContent());

            $json = [
                'activity' => $postJson->activity
            ];

            $jsonTest[] = $postJson;

            dump($jsonTest);
            $activity = new Activites();

            $activity->setName($json['activity']);

            $em = $this->getDoctrine()->getManager();
            $em->persist($activity);
            $em->flush();
        }else {echo 'pas post';}

        die();
    }
}
