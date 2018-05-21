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

        $user = $this->getUser();

        dump($user);

        $em = $this->getDoctrine()->getManager();
        $originalImage = null;

            /*if (is_null($user)) {
                throw new NotFoundHttpException();
            }*/

            if (!is_null($user->getProfilImg())) {
                // nom du fichier en bdd
                $originalImage = $user->getProfilImg();
                $user->setProfilImg(
                    new File($this->getParameter('upload_dir') . $originalImage)
                );
            }

        $form = $this->createForm(InscriptionType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                /** @var UploadedFile|null */
                $image = $user->getProfileImg();

                // s'il y a eu une image uploadée
                if (!is_null($image)) {
                    // nom du fichier que l'on va enregistrer
                    $filename = uniqid() . '.' . $image->guessExtension();

                    $image->move(
                    // répertoire de destination
                    // cf config/services.yaml
                        $this->getParameter('upload_dir'),
                        $filename
                    );

                    // on sette l'image avec le nom qu'on lui a donné
                    $user->setProfilImg($filename);

                    // suppression de l'ancienne image de l'article
                    // s'il on est en modification d'un article qui en avait
                    // déjà une
                    if (!is_null($originalImage)) {
                        unlink($this->getParameter('upload_dir') . $originalImage);
                    }
                } else {
                    // sans upload, on garde l'ancienne image
                    $user->setProfilImg($originalImage);
                }

                $em->persist($user);
                $em->flush();

                $this->addFlash('success', "L'article est enregistré");
                return $this->redirectToRoute('app_admin_article_index');
            } else {
                $this->addFlash(
                    'error',
                    'Le formulaire contient des erreurs'
                );
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
     * @Route("/edit/name")
     */
    public function nameEdit(Request $request) {

        $user = $this->getUser();

        dump($user);

        $em = $this->getDoctrine()->getManager();

        if (is_null($user->getId())) { // création
            $user = new User();
        } else { // modification
            $user = $em->find(User::class, $user->getId());

            // 404 si l'id reçu dans l'URL n'existe pas en bdd
            if (is_null($user)) {
                throw new NotFoundHttpException();
            }
        }

        $form = $this->createForm(InscriptionType::class, $user);
        // le formulaire analyse la requête HTTP
        $form->handleRequest($request);

        if($form->isSubmitted()) {
            if($form->isValid()) {
                $em->persist($user);
                $em->flush();

                $this->addFlash(
                    'success',
                    'La catégorie est enregistrée'
                );

                return $this->redirectToRoute('app_admin_category_index');
            } else {
                $this->addFlash(
                    'error',
                    'Le formulaire contient des erreurs'
                );
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

}
