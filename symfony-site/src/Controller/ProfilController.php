<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\InscriptionType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class ProfilController
 * @Route("/profil")
 */
class ProfilController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {

        $userLogged = $this->getUser();

        return $this->render('logged/index.html.twig',
            [
                'userLogged' => $userLogged
            ]
        );
    }

    /**
     * @Route("/edit")
     */
    public function edit(Request $request) {

        $user = $this->getUser();

       $form = $this->createForm(InscriptionType::class, $user);
       $form->handleRequest($request);
       

        return $this->render(
            'logged/edit.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }

}
