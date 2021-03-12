<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Resactivites;
use App\Repository\ResactivitesRepository;
use App\Form\ResactivitesType;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ResactivitesController extends AbstractController
{
   
     /**
     * @Route("/listresactivites", name="listresactivites", methods={"GET"}))
     */
    public function list(ResactivitesRepository $resactivitesRepository): Response
    { 
        $Repository=$this -> getDoctrine () -> getRepository (Resactivites::class);
        $resactivites= $Repository -> findAll();
       
        return $this->render('resactivites/Listresactivites.html.twig', [
            'resactivites' => $resactivites,
        ]);
    
    }

    /**
     * @Route("/pdf", name="pdf", methods={"GET"})
     */
    public function pdf(ResactivitesRepository $resactivitesRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('resactivites/pdf.html.twig', [
            'resactivites' => $resactivitesRepository->findAll(),
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
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