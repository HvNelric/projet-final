<?php

namespace App\Controller;

use App\Entity\Sejour;
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

        return $this->render(
            'sejour/index.html.twig',
            [
                'sejours' => $sejours
            ]
        );
    }

    /**
     *
     * @Route("/detail/{id}", defaults={"id":null})
     */
    public function details($id) {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(Sejour::class, $id);
        $sejour = $repository->find($id);
dump($id);
dump($sejour);
        return $this->render(
            'sejour/detail.html.twig',
            [
                'sejour' => $sejour
            ]
        );

    }
}
