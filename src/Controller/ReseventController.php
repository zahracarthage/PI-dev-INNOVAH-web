<?php

namespace App\Controller;
use App\Entity\Resevent;
use App\Form\ReseventType;
use App\Repository\ReseventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

class ReseventController extends AbstractController
{

    /**
     * @Route("/resevents", name="resevent")
     */
     public function index(): Response
    {
        return $this->render('resevent/index.html.twig', [
            'controller_name' => 'ReseventController',
            ]);
    }
    /**
    /**
     * @param ReseventRepository $Repository
     * @return \symfony\Component\HttpFoundation\Response
     * @Route ("/listres", name="listres")
     */
    public function afficheres(ReseventRepository $Repository)
    {
        $resevent= $Repository->findAll();
        return $this->render('resevent/listres.html.twig', [
            'resevent' => $resevent,
        ]);
    }
    /**
     * @param ReseventRepository $Repository
     * @return \symfony\Component\HttpFoundation\Response
     * @return \symfony\Component\HttpFoundation\Request

     * @Route ("/deletereservation/{id}",name="deletereservation")
     */
    public function delete($id)
    {
        $em=$this->getDoctrine()->getManager();
        $reservation=$em->getRepository(Resevent::class)->find($id);
        $em->remove($reservation);
        $em->flush();
        return $this->redirectToRoute('listres');

    }
    /**
     * @Route("/newreservation", name="newreservation")
     */

    public function newreservation(Request $request )
    {   $reservation = new Resevent();
        $form = $this->createForm (ReseventType::class, $reservation);
        $form -> add ('Add.a.new.Reservation', SubmitType::Class);
        $form -> handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $reservation = $form->getData();
            $em= $this->getDoctrine()->getManager();
            $em->persist ($reservation);
            $em->flush();
            return $this->redirectToRoute('listres');
        }
        return $this->render('resevent/newreservation.html.twig', [
            'form_title'=>"Ajouter Une Reservation",
            'form' => $form -> createView (),
        ]);
    }
    /**
     * @Route("/pdf2", name="pdf2", methods={"GET"})
     */
    public function pdf(reseventRepository $reseventRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('resevent/pdf2.html.twig', [
            'resevent' => $reseventRepository->findAll(),
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
    }

    /**
     * @Route ("/updatereservation/{id}", name="updatereservation")
     */
    public function updatereservation(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $reservation=$em->getRepository(Resevent::class)->find($id);
        $form=$this->createForm(ReseventType::class,$reservation);
        $form->add('Update/Modifier',SubmitType::Class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $em->flush();
            return $this->redirectToRoute('listres');
        }
        return $this->render('resevent/updatereservation.html.twig',[
            'form_title'=>"Modifier Une Reservation",
            'form'=>$form-> createView(),
        ]);
    }

    /**
     * @param ReseventRepository $Repository
     * @return Response
     * @Route ("/stat", name="stat")
     */

    public function statistiques(ReseventRepository $reseventRepository){
        $forum = $reseventRepository->countByDate();
        $dates = [];
        $annoncesCount = [];
        foreach($forum as $foru){

            $dates [] = $foru['date'];
            $annoncesCount[] = $foru['count'];
        }
        return $this->render('resevent/stat.html.twig', [
            'dates' => $dates,
            'annoncesCount' => $annoncesCount
        ]);
    }








}
