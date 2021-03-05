<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Resactivites;
use App\Repository\Resactivitesrepository;
use App\Form\ResactivitesType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class ResactivitesController extends AbstractController
{
   
     /**
     * @Route("/listresactivites", name="listresactivites")
     */
    public function list()
    {
        $Repository=$this -> getDoctrine () -> getRepository (Resactivites::class);
        $resactivites= $Repository -> findAll();
       
        return $this->render('resactivites/listresactivites.html.twig', [
            'resactivites' => $resactivites,
        ]);
    }
    /**
     * @Route("/newresactivites", name="newresactivites")
     */
    public function newresactivites(Request $request )
    {   $resactivites= new Resactivites ();
        $form =$this->createForm (ResactivitesType::class, $resactivites);
        $form ->handleRequest($request);
        if ($form->isSubmitted()){
        $resactivites= $form->getData();
        $em= $this->getDoctrine()->getManager();
        $em->persist ($resactivites);
        $em->flush();
        return $this->redirectToRoute('listresactivites');
        }
            return $this->render('resactivites/newresactivites.html.twig', [
            'form' => $form -> createView (),
        ]);
    }
    /**
     * @Route("/updateresactivites/{idresactivites}", name="updateresactivites")
     */
    public function updateresactivites(Request $request, $idresactivites )
    {   $em= $this->getDoctrine()->getManager();
        $resactivites= $em ->getRepository (Resactivites::class)->find ($idresactivites);
        $form =$this->createForm (ResactivitesType::class, $resactivites);
        $form ->handleRequest($request);
        if ($form->isSubmitted() && $form-> isValid ()){
        $em->flush();
        return $this->redirectToRoute('listresactivites');
        }
            return $this->render('resactivites/updateresactivites.html.twig', [
            'form_title'=> "modifier la reservation",
            'form' => $form -> createView (),
        ]);
        
    }
    /**
     * @Route("/deleteresactivites/{idresactivites}", name="deleteresactivites")
     */
    public function deleteresactivites($idresactivites )
    {   $em= $this->getDoctrine()->getManager();
        $resactivites= $em ->getRepository (Resactivites::class)->find ($idresactivites);
        $em-> remove ($resactivites);
        $em->flush();
        return $this->redirectToRoute('listresactivites');
        
    }
    
}