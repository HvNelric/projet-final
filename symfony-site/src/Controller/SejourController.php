<?php

namespace App\Controller;

use App\Entity\Sejour;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SejourController extends Controller
{
    /**
     * @Route("/sejour")
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
}
