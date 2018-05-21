<?php

namespace App\Controller;

use App\Entity\Activites;
use App\Entity\Region;
use App\Entity\User;
use App\Form\InscriptionType;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

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

        $userId = $userLogged->getId();

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


        return $this->render('logged/index.html.twig',
            [
                'userLogged' => $userLogged
            ]
        );
    }

    /**
     * @Route("/edit/photo")
     * @param Request $request
     */
    public function imgEdit(Request $request) {




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
     * @Route("/edit/name")
     */
    public function nameEdit(Request $request) {



        return $this->render(
            'logged/name-edit.html.twig',
            [
                'form' => $form->createView(),
                'user' => $user
            ]
        );
    }

    /**
     * @param User $user
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/delete/{id}")
     */
    public function delete(User $user) {


        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        $this->addFlash(
            'success',
            'votre compte est supprimé'
        );

        return $this->redirectToRoute('app_index_index');
    }

}
