<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Events;
use App\Repository\EventsRepository;
use App\Form\EventsType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Knp\Component\Pager\PaginatorInterface ;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Form\FormBuilderInterface;


class EventsController extends AbstractController
{
    /**
     * @Route("/events", name="events")
     */
    public function index(): Response
    {
        return $this->render('events/index.html.twig', [
            'controller_name' => 'EventsController',
        ]);
    }


    /**
     * @param EventsRepository $Repository
     * @return \symfony\Component\HttpFoundation\Response
     * @Route ("/list", name="list")
     */


    public function affiche(EventsRepository $Repository,Request $request , PaginatorInterface $paginator ): Response
    {
        // $Repository= $this
        //     -> getDoctrine () ->
        //     getRepository (Events::class);
        $Events = $Repository->findAll();
        $events= $paginator->paginate(
            $Events,
            $request->query->getInt('page',1),
            3
        );

        return $this->render('events/list.html.twig', [
            'events' => $events,
        ]);
    }

        /**
         * @Route ("/delete/{id}",name="delete")
         */
    public function delete($id)
    {
        $em=$this->getDoctrine()->getManager();
        $events= $em ->getRepository (Events::class)->find ($id);
        $em->remove($events);
        $em->flush();
         return $this->redirectToRoute('list') ;
    }
 /**
  * @Route("/newEvents", name="newEvents")
  */

    public function newEvents(Request $request )
    {   $events= new Events();
        $form =$this->createForm (EventsType::class, $events);
        $form -> add ('Ajouter', SubmitType::Class);
        $form ->handleRequest($request);
        if ($form->isSubmitted()){
            $events= $form->getData();
            $em= $this->getDoctrine()->getManager();
            $em->persist ($events);
            $em->flush();
            return $this->redirectToRoute('list');
        }
        return $this->render('Events/newEvents.html.twig', [
            'form' => $form -> createView (),
        ]);
    }
    /**
     * @Route("/updateEvents/{id}", name="updateEvents")
     */

    public function updateEvents(Request $request, $id)
    {
        $em= $this->getDoctrine()->getManager();
        $events= $em ->getRepository (Events::class)->find ($id);
        $form =$this->createForm (EventsType::class, $events);
        $form -> add ('Update/Modifier', SubmitType::Class);
        $form ->handleRequest($request);
        if ($form->isSubmitted() && $form-> isValid ())
        {
            $em->flush();
            return $this->redirectToRoute('list');
        }
        return $this->render('Events/updateEvents.html.twig', [
            'form_title'=> "modifier un Event",
            'form' => $form -> createView (),
        ]);
    }
    /**
     * @Route("/pdf", name="pdf", methods={"GET"})
     */
    public function pdf(EventsRepository $EventsRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('events/pdf.html.twig', [
            'events' => $EventsRepository->findAll(),
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


}
