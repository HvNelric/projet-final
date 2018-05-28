<?php

namespace App\Controller;

use App\Entity\Activites;
use App\Entity\Region;
use App\Entity\User;
use App\Form\Edit\ActivityType;
use App\Form\Edit\AgeType;
use App\Form\Edit\DispoType;
use App\Form\Edit\EmailType;
use App\Form\Edit\ImgType;
use App\Form\Edit\NameType;
use App\Form\InscriptionType;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

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

        $json = json_encode($userLogged);

        return new Response('ok');



        /*$em = $this->getDoctrine()->getManager()->getRepository(User::class);
        $qb = $em->createQueryBuilder('u')
        //$qb->select('a')
            //->from(Activites::class, 'a')
            ->join('u.activites', 'a')
            ->addSelect('a')
            ->where('u.id = :id')
            ->setParameter('id', $userId);*/


       /* $activities = $qb->getQuery()->getResult(); //->getSingleScalarResult()

        dump($activities);*/
        /*$em = $this->getDoctrine()->getManager()->getRepository(User::class);
        $qb = $em->createQueryBuilder('u')
            //$qb->select('a')
            //->from(Activites::class, 'a')
            ->join('u.region', 'r')
            ->addSelect('r')
            ->where('u.id = :id')
            ->setParameter('id', $userId);
        $regions = $qb->getQuery()->getResult();

        dump($regions);*/

        /*$em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(Activites::class);
        $activities = $repository->find('1');*/


//        return $this->render('logged/index.html.twig',
//            [
//                'userLogged' => $userLogged
//            ]
//        );
    }

    /**
     * @Route("/edit-image")
     */
    public function editImg(Request $request) {

        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();
        $originalImage = null;

        if(!is_null($user->getProfilImg())) {
            $originalImage = $user->getProfilImg();
            $user->setProfilImg(
                new File($this->getParameter('upload_dir') . $originalImage)
            );
            dump("si image pas null");
        }

        $form = $this->createForm(ImgType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted()) {
            if($form->isValid()) {
                $image = $user->getProfilImg();

                if(!is_null($image)) {
                    $filename = uniqid() . '.' . $image->guessExtension();

                    $image->move(
                        $this->getParameter('upload_dir'), $filename
                    );
                    dump('si image pas null, bouge dans le dossier');

                    $user->setProfilImg($filename);

                    if(!is_null($originalImage)) {
                        unlink($this->getParameter('upload_dir') . $originalImage);
                        dump('si pas null original, supprime');
                    }
                }
                else {
                    $user->setProfilImg($originalImage);
                    dump('remettre ancinne photo');
                }

                $em->persist($user);
                $em->flush();

                $this->addFlash('succes', 'La photo a été modifiée');
                return $this->redirectToRoute('app_profil_index');
            } else {
                $this->addFlash('error', 'il y des erreurs');
            }
        }

        return $this->render(
            'logged/img-edit.html.twig',
            [
                'form' => $form->createView(),
                'user' => $user
            ]
        );
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/edit-name")
     */
    public function editName(Request $request) {

        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(NameType::class, $user);
        $form->handleRequest($request);
dump($user);
        if($form->isSubmitted()) {

            if($form->isValid()) {

                $em->persist($user);
                $em->flush();

                $this->addFlash('succes', 'Le changement a été pris en compte');
            } else {
                $this->addFlash('error', 'Le formulaire contient des erreurs');
            }
        }

        return $this->render(
            'logged/name-edit.html.twig',
            [
                'form' => $form->createView(),
                'user' => $user
            ]
        );
    }

    /**
     * @param Request $request
     * @Route("/edit-email")
     */
    public function editEmail(Request $request) {

        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(EmailType::class, $user);
        $form->handleRequest($request);

        if(($form->isSubmitted()) && ($form->isValid())) {

            $em->persist($user);
            $em->flush();

            $this->addFlash('succes', "L'email a été modifié");
        }

        return $this->render(
            'logged/email-edit.html.twig',
            [
                'form' => $form->createView(),
                'user' => $user
            ]
        );
    }

    /**
     * @Route("/edit-age")
     */
    public function editAge(Request $request) {

        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(AgeType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted()) {

            if($form->isValid()) {

                $em->persist($user);
                $em->flush();

                $this->addFlash('succes', "L'age a été modifié");

            } else {
                $this->addFlash('error', 'Erreur');
            }
        }

        return $this->render(
            'logged/age-edit.html.twig',
            [
                'form' => $form->createView(),
                'user' => $user
            ]
        );
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/edit-date")
     */
    public function editDate(Request $request) {

        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(DispoType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted()) {

            if($form->isValid()) {

                $em->persist($user);
                $em->flush();

                $this->addFlash('succes', "L'age a été modifié");
            } else {

                $this->addFlash('error', 'Erreur');
            }
        }

        return $this->render(
            'logged/date-edit.html.twig',
            [
                'form' => $form->createView(),
                'user' => $user
            ]
        );
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/edit-activites")
     */
    public function editActivities(Request $request) {

        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(ActivityType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted()) {

            if($form->isValid()) {

                $em->persist($user);
                $em->flush();

                $this->addFlash('succes', "modification enregistrée");

            } else {

                $this->addFlash('error', 'Erreur');
            }
        }

        return $this->render(
            'logged/activities-edit.html.twig',
            [
                'form' => $form->createView(),
                'users' => $user
            ]
        );
    }

    /**
     * @param User $user
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/delete/{id}")
     */
    public function delete(User $user) {

        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        $this->addFlash(
            'success',
            'votre compte est supprimé'
        );

        return $this->redirectToRoute('app_index_index');
    }

    /**
     * @Route("/activites")
     */
    public function menuActivities()
    {

        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Activites::class);
        $activities = $repo->findAll();

        $json = [];
        foreach($activities as $activity) {
            $activity_tab = [
                'activity' => $activity->getName(),
                'id' => $activity->getId()
            ];
            $json[] = $activity_tab;
        }

        return new JsonResponse($json);
    }

}
