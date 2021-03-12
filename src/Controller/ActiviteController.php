<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Activites;
use App\Entity\rechercheActivite;
use App\Repository\Activitesrepository;
use App\Form\ActiviteType;
use App\Form\RechercheType;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ActiviteController extends AbstractController
{
    /**
     * @Route("/activite", name="activite")
     */
    public function index(): Response
    {
        return $this->render('activite/index.html.twig', [
            'controller_name' => 'ActiviteController',
        ]);
    }
     /**
     * @Route("/listactivites", name="listactivites")
     */
    public function list()
    {
        $Repository=$this -> getDoctrine () -> getRepository (activites::class);
        $activites= $Repository -> findAll();
       
        return $this->render('activite/afficheractivitesadmin.html.twig', [
            'activites' => $activites,
        ]);

        
    }
    /**
     * @Route("/newActivite", name="newActivite")
     */
    public function newActivite(Request $request )
    {   var_dump('image');
        $activite= new Activites ();
        $form =$this->createForm (ActiviteType::class, $activite);
        $form ->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $image= $request -> files->get ('activite')['image'];
            $uploads_directory= $this->getParameter('uploads_directory');
            $filename =md5(uniqid()) . '.' . $image ->guessExtension();
            $image ->move(
                $uploads_directory,
                $filename
            );
        $activite ->setImage ($filename);
        $activite= $form->getData();
        $em= $this->getDoctrine()->getManager();
        $em->persist ($activite);
        $em->flush();
        return $this->redirectToRoute('listactivites');
        }
            return $this->render('activite/CRUDadmin.html copy.twig', [
            'form' => $form -> createView (),
        ]);
    }
    /**
     * @Route("/updateActivite/{idact}", name="updateActivite")
     */
    public function updateActivite(Request $request, $idact )
    {   $em= $this->getDoctrine()->getManager();
        $activite= $em ->getRepository (Activites::class)->find ($idact);
        $form =$this->createForm (ActiviteType::class, $activite);
        
        $form ->handleRequest($request);
        if ($form->isSubmitted() && $form-> isValid ()){
            $image= $request -> files->get ('activite')['image'];
            $uploads_directory= $this->getParameter('uploads_directory');
            $filename =md5(uniqid()) . '.' . $image ->guessExtension();
            $image ->move(
                $uploads_directory,
                $filename
            );
        $activite ->setImage ($filename);
        $em->flush();
        return $this->redirectToRoute('listactivites');
        }
            return $this->render('activite/updateActivite.html.twig', [
            'form_title'=> "modifier une activité",
            'form' => $form -> createView (),
        ]);
        
    }
    /**
     * @Route("/deleteActivite/{idact}", name="deleteActivite")
     */
    public function deleteActivite($idact )
    {   $em= $this->getDoctrine()->getManager();
        $activite= $em ->getRepository (Activites::class)->find ($idact);
        $em-> remove ($activite);
        $em->flush();
        return $this->redirectToRoute('listactivites');
        
    }

     /**
     * @Route("/list", name="list")
     */
    public function listactivites(Request $request , PaginatorInterface $paginator ): Response
    {
        $Repository=$this -> getDoctrine () -> getRepository (activites::class);
        $activites= $Repository -> findAll();
        $activites = $paginator->paginate(
            $activites,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('activite/list.html.twig', [
            'activites' => $activites,
        ]);
        
        
    }

   
    

    
    

}
