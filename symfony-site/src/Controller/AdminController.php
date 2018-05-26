<?php

namespace App\Controller;

use App\Entity\Activites;
use App\Entity\Region;
use App\Entity\Sejour;
use App\Form\ActivitesType;
use App\Form\SejourType;
use Symfony\Component\HttpFoundation\JsonResponse;
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

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(Sejour::class);
        $sejours = $repository->findAll();

        $repoAct = $em->getRepository(Activites::class);
        $activities = $repoAct->findAll();

        $repoRegion = $em->getRepository(Region::class);
        $regions = $repoRegion->findAll();

        return $this->render(
            'admin/index.html.twig',
            [
                'user' => $user,
                'sejours' => $sejours,
                'activities' => $activities,
                'regions' => $regions
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

                    $sejour->setVilleImg($filename);
                }

                $em = $this->getDoctrine()->getManager();
                $em->persist($sejour);
                $em->flush();

                $this->addFlash('succes', 'Votre ville a été ajoutée');
            } else {
                $this->addFlash('error', 'Le formulaire contient des erreurs');
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

    /**
     *
     * @Route("/delete-sejour/{id}")
     */
    public function deleteSejour(Sejour $sejour)
    {

            $em = $this->getDoctrine()->getManager();
            $em->remove($sejour);
            $em->flush();

            $this->addFlash(
                'success',
                'La catégorie est supprimée'
            );

        return $this->redirectToRoute('app_admin_index');
    }

    /**
     *
     * @Route("/delete-activite/{id}")
     */
    public function deleteActivites(Activites $activites, $id)
    {
        if (($activites->getUserActivites()->isEmpty()) || ($activites->getSejourActivites()->isEmpty())) {
            $em = $this->getDoctrine()->getManager();
            $em->find(Activites::class, $id);


            $em->remove($activites);
            $em->flush();

            $this->addFlash(
                'success', "L'activitée est supprimée");
        } else {
            $this->addFlash(
                'error',
                "L'activitée ne peut pas être supprimée car elle contient appartient à des utilisateurs ou des séjours "
            );
        }

        return $this->redirectToRoute('app_admin_index');
    }

    /**
     *
     * @Route("/delete-region/{id}")
     */
    public function deleteRegion(Region $region)
    {
        if (($region->getUserRegion()->isEmpty()) && ($region->getSejourRegion()->isEmpty())) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($region);
            $em->flush();

            $this->addFlash(
                'success', "La région est supprimée");
        } else {
            $this->addFlash(
                'error', 'La région ne peut pas etre supprimée car elle appartient à des utilisateurs u des séjours'
            );
        }

        return $this->redirectToRoute('app_admin_index');
    }

    /**
     * @Route("/add-activite-r")
     */
    public function addActivityR()
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

            $activity = new Activites();

            $activity->setName($json['activity']);

            $em = $this->getDoctrine()->getManager();
            $em->persist($activity);
            $em->flush();

            $message = [
              'msg' => 'OK'
            ];

            return new JsonResponse($message);
        }

        $message = [
           'msg' => 'NOT OK'
        ];
        return new JsonResponse($message);
    }

}
