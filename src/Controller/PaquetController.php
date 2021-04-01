<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Paquet;
use App\Repository\Paquetrepository;
use App\Form\PaquetType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class PaquetController extends AbstractController
{
    /**
     * @Route("/paquet", name="paquet")
     */
    public function index(): Response
    {
        return $this->render('paquet/index.html.twig', [
            'controller_name' => 'PaquetController',
        ]);
    }
     /**
     * @Route("/listPaquets", name="listPaquets")
     */
    public function list()
    {
        $Repository=$this -> getDoctrine () -> getRepository (Paquet::class);
        $paquet= $Repository -> findAll();
       
        return $this->render('paquet/listPaquet.html.twig', [
            'paquets' => $paquet,
        ]);
    }
    /**
     * @Route("/newPaquet", name="newPaquet")
     */
    public function newPaquet(Request $request )
    {   $paquet= new Paquet ();
        $form =$this->createForm (PaquetType::class, $paquet);
        $form -> add ('Ajouter', SubmitType::class);
        $form ->handleRequest($request);
        if ($form->isSubmitted()){
        $paquet= $form->getData();
        $em= $this->getDoctrine()->getManager();
        $em->persist ($paquet);
        $em->flush();
        return $this->redirectToRoute('listPaquets');
        }
            return $this->render('paquet/newPaquet.html.twig', [
            'form' => $form -> createView (),
        ]);
    }
    /**
     * @Route("/updatePaquet/{idpaquet}", name="updatePaquet")
     */
    public function updatePaquet(Request $request, $idpaquet )
    {   $em= $this->getDoctrine()->getManager();
        $paquet= $em ->getRepository (Paquet::class)->find ($idpaquet);
        $form =$this->createForm (PaquetType::class, $paquet);
        $form -> add ('Modifier', SubmitType::class);
        $form ->handleRequest($request);
        if ($form->isSubmitted() && $form-> isValid ()){
        $em->flush();
        return $this->redirectToRoute('listPaquets');
        }
            return $this->render('paquet/updatePaquet.html.twig', [
            'form_title'=> "modifier le paquet",
            'form' => $form -> createView (),
        ]);
        
    }
    /**
     * @Route("/deletePaquet/{idpaquet}", name="deletePaquet")
     */
    public function deleteActivite($idpaquet )
    {   $em= $this->getDoctrine()->getManager();
        $paquet= $em ->getRepository (Paquet::class)->find ($idpaquet);
        $em-> remove ($paquet);
        $em->flush();
        return $this->redirectToRoute('listPaquets');
        
    }
    
}