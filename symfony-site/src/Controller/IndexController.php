<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {

        $user = $this->getUser();
dump($user);
        return $this->render(
            'layout.html.twig',
            [
                'user' => $user
            ]
        );
    }
}
