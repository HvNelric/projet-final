<?php

namespace App\Controller;

use App\Entity\Region;
use App\Entity\Sejour;
use App\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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

        if($this->isGranted('ROLE_ADMIN')) {
            return new Response('ADMIN');
        }

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

    /**
     * @Route("/regions")
     */
    public function menuRegions()
    {

        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Region::class);
        $regions = $repo->findAll();

        $json = [];
        foreach($regions as $region) {
           $region_tab = [
               'region' => $region->getRegion()
           ];
           $json[] = $region_tab;
        }

        return new JsonResponse($json);
    }

    /**
     * @Route("/sejour-par-region/{id}")
     */
    public function sejoursByRegion($id)
    {

        $em = $this->getDoctrine()->getManager();
        $regions = $em->getRepository(Region::class)->find($id);

        $data = $regions->toArray();
        dump($data);




        return $this->render(
            'sejour/index.html.twig',
            [
                'regions' => $regions
            ]
        );
    }
}



