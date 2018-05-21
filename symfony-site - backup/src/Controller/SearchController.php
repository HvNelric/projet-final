<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchController extends Controller
{
    /**
     * @Route("/search")
     */
    public function index()
    {
        return $this->render('search.html.twig', [
            'controller_name' => 'SearchController',
        ]);
    }
}
