<?php

namespace App\Controller;

use App\Entity\Sejour;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class SejourController
 * @Route("/sejour")
 */
class SejourController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(Sejour::class);
        $sejours = $repository->findAll();

        dump($sejours);

        $json = [];

        foreach( $sejours as $sejour) {
            $sejour_tab = [
                'ville' => $sejour->getVille(),
                'image' => $sejour->getVilleImg(),
                'desc' => $sejour->getDescription(),
                'prix' => $sejour->getPrix(),
                'date_depart' => $sejour->getDateDepart(),
                'hebergement' => $sejour->getHebergement(),
                'transport' => $sejour->getTransport(),
                'duree' => $sejour->getDuree(),
                'activite' =>$sejour->getActivitesSejour(),
                'region'=> $sejour->getRegionSejour()
            ];
            $json[] = $sejour_tab;
        }

        return new JsonResponse($json);
    }

    /**
     *
     * @Route("/detail/{id}", defaults={"id":null})
     */
    public function details($id) {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(Sejour::class, $id);
        $sejour = $repository->find($id);

        dump($sejour);

        $json = [
            'ville' => $sejour->getVille(),
            'image' => $sejour->getVilleImg(),
            'desc' => $sejour->getDescription(),
            'prix' => $sejour->getPrix(),
            'date_depart' => $sejour->getDateDepart(),
            'hebergement' => $sejour->getHebergement(),
            'transport' => $sejour->getTransport(),
            'duree' => $sejour->getDuree(),
            'activite' =>$sejour->getActivitesSejour(),
            'region'=> $sejour->getRegionSejour()
        ];

        return new JsonResponse($json);

//        return $this->render(
//            'sejour/detail.html.twig',
//            [
//                'sejour' => $sejour
//            ]
//        );

    }
}
