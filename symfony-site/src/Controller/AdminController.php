<?php

namespace App\Controller;

use App\Entity\Activites;
use App\Entity\Region;
use App\Entity\Sejour;
use App\Form\ActivitesType;
use App\Form\SejourType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class AdminController
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {
        $user = $this->getUser();

        if(!is_null($user->getRole() == 'ROLE_ADMIN')) {
            dump(1);
        }

        return $this->render(
            'admin/index.html.twig',
            [
                'user' => $user
            ]
        );
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route("/add-sejour")
     */
    public function addSejour(Request $request) {

        $sejour = new Sejour();
        $form = $this->createForm(SejourType::class, $sejour);
        $form->handleRequest($request);

        if($form->isSubmitted()) {
            if($form->isValid()) {

                $image = $sejour->getVilleImg();

                if(!is_null($image)) {

                    $filename = uniqid() . '.' . $image->guessExtension();

                    $image->move(
                        $this->getParameter('sejour_dir'), $filename
                    );

                    $user->setVilleImg($filename);
                }

                $em = $this->getDoctrine()->getManager();
                $em->persist($sejour);
                $em->flush();

                $this->addFlash('succes', 'Votre compte est crée');
                return $this->redirectToRoute('app_admin_index');
            }
        }

        return $this->render(
            'admin/sejour.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route("/add-activites")
     */
    public function addActivites(Request $request) {

        $activites = new Activites();
        $form = $this->createForm(ActivitesType::class, $activites);
        $form->handleRequest($request);

        if($form->isSubmitted()) {

            if($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($activites);
                $em->flush();

                $this->addFlash('sucess', "L'activitée est enregistré");
                return $this->redirectToRoute('app_admin_addactivites');
            } else {
                $this->addFlash('error', 'Le formulaire contient des erreurs');
            }
        }

        return $this->render(
            'admin/activites.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route("/add-region")
     */
    public function addRegion(Request $request) {
        $region = new Region();
        $form = $this->createForm(Region::class, $region);
        $form->handleRequest($request);

        if($form->isSubmitted()) {

            if($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($region);
                $em->flush();

                $this->addFlash('sucess', "L'activitée est enregistré");
                return $this->redirectToRoute('app_admin_addactivites');
            } else {
                $this->addFlash('error', 'Le formulaire contient des erreurs');
            }
        }

        return $this->render(
            'admin/region.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }
}
