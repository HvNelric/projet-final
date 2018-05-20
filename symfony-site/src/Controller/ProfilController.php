<?php

namespace App\Controller;

use App\Entity\Activites;
use App\Entity\Region;
use App\Entity\User;
use App\Form\InscriptionType;
use Doctrine\ORM\QueryBuilder;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
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
     */
    public function imgEdit(Request $request) {

       $form = $this->createForm(InscriptionType::class);
       $form->handleRequest($request);

       $user = $this->getUser();

       if($form->isSubmitted()) {
           //if($form->isValid()) {

               /**
                * @var UploadedFile|null
                */
               $image = $user->getProfilImg();

                   $filename = uniqid() . '.' . $image->guessExtension();

                   $image->move(
                       $this->getParameter('upload_dir'),
                       $filename
                   );

                   $user->setProfilImg($filename);


               //$originalImage = $user->getProfilImg();

               /*if (!is_null($originalImage)) {
                   unlink($this->getParameter('upload_dir') . $originalImage);
               }*/

           dump($user);

               $em = $this->getDoctrine()->getManager();
               $em->persist($user);
               $em->flush();

               $this->addFlash('succes', 'Votre photo de profil a été modifié');
               return $this->redirectToRoute('app_profil_index');
           //} else {
               $this->addFlash('error', 'Le formulaire contient des erreurs');
           //}
       }


        return $this->render(
            'logged/img-edit.html.twig',
            [
                'form' => $form->createView(),
                'user' => $user
            ]
        );
    }

}
