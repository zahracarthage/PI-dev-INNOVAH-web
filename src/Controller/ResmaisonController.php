<?php

namespace App\Controller;

use App\Entity\Resmaison;
use App\Entity\Maisonhote;
use App\Form\ResmaisonType;
use App\Repository\ResmaisonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use Stripe\Stripe;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * @Route("/resmaison")
 */
class ResmaisonController extends AbstractController
{
    /**
     * @Route("/", name="resmaison_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $repository = $this->getdoctrine()->getRepository(resmaison::class);
        $resmaisons= $repository->findAll();
        $resmaisons = $paginator->paginate(
            $resmaisons,
            $request->query->getInt('page',1),
            3
        );
        return $this->render('resmaison/index.html.twig', [
            'resmaisons' => $resmaisons,
        ]);
    }


    /**
     * @Route("/succes", name="succes", methods={"GET"})
     */
    public function success()
    {
       return $this->render('resmaison/succes.html.twig', [
         ]);
    }


     /**
     * @Route("/error", name="error", methods={"GET"})
     */
    public function error()
    {
       return $this->render('resmaison/error.html.twig', [
         ]);
    }


  
    /**
     * @Route("/create-checkout-session", name="checkout")
     */
    public function checkout()
    {
       \Stripe\Stripe::setApiKey('your stripe api key');

       $session = \Stripe\Checkout\Session::create([
          'payment_method_types' => ['card'],
          'line_items' => [[
          'price_data' => [
          'currency' => 'eur',
          'product_data' => [
          'name' => 'T-shirt',
        ],
          'unit_amount' => 2000,
        ],
          'quantity' => 1,
        ]],
          'mode' => 'payment',
          'success_url' => $this->generateUrl('succes', [], UrlGeneratorInterface::ABSOLUTE_URL),
          'cancel_url' => $this->generateUrl('error', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);

                return new JsonResponse([ 'id' => $session->id ]);


        }

















    /**
     * @Route("/imprim", name="imprim")
     */
    public function imprim(ResmaisonRepository $resmaisonRepository): Response

    {

      // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        $resmaisons = $resmaisonRepository->findAll();
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('resmaison/imprim.html.twig', [
           'resmaisons' => $resmaisons,
        ]);
        
        // Load HTML to Dompdf
       $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("Liste réservation.pdf", [
            "Attachment" => true
        ]);
    }


    /**
     * @Route("/formreservation", name="formreservation")
     */
    public function formreservation(Request $request, \Swift_Mailer $mailer): Response
    {   $resmaison = new Resmaison();
        $em= $this->getDoctrine()->getManager();
        $form = $this->createForm(ResmaisonType::class, $resmaison);
        $form->handleRequest($request);
        $id= $request->get('id');
        $Maisonhote=$em->getRepository(Maisonhote::class)->find($id);
        if ($form->isSubmitted() && $form->isValid()) {
            $resmaison->setIdmm($Maisonhote);
        $resmaisons= $form->getData();
        $em= $this->getDoctrine()->getManager();
        $em->persist ($resmaison);
        $em->flush();
        $this->addFlash('success', 'votre réservation est faite avec succés! vous receverez un e-mail de confirmation.');

           
           

            $message = (new \Swift_Message('New'))

            ->setFrom('zcarthage@gmail.com')

            ->setTo('zaienebaccar2015@gmail.com')

            ->setSubject('Réservation')


            ->setBody(
                $this->renderView(
                    'emails/mail.html.twig'),
                    
                    'text/html'
                )
                ;
   
            $mailer->send($message); 
            $this->addFlash('message', 'Réservation effectuer avec succés');



        }
            return $this->render('resmaison/formreservation.html.twig', [
            'form' => $form -> createView (),
        ]);
    }













    /**
     * @Route("/new", name="resmaison_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {   
        $resmaison = new Resmaison();
        $em= $this->getDoctrine()->getManager();
        $form = $this->createForm(ResmaisonType::class, $resmaison);
        $form->handleRequest($request);
        $id= $request->get('id');
        $Maisonhote=$em->getRepository(Maisonhote::class)->find($id);
        if ($form->isSubmitted() && $form->isValid()) {
            $resmaison->setIdmm($Maisonhote);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($resmaison);
            $entityManager->flush();

            return $this->redirectToRoute('resmaison_index');
        }

        return $this->render('resmaison/new.html.twig', [
            'resmaison' => $resmaison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="resmaison_show", methods={"GET"})
     */
    public function show(Resmaison $resmaison): Response
    {
        return $this->render('resmaison/show.html.twig', [
            'resmaison' => $resmaison,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="resmaison_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Resmaison $resmaison): Response
    {
        $form = $this->createForm(ResmaisonType::class, $resmaison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('resmaison_index');
        }

        return $this->render('resmaison/edit.html.twig', [
            'resmaison' => $resmaison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="resmaison_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Resmaison $resmaison): Response
    {
        if ($this->isCsrfTokenValid('delete'.$resmaison->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($resmaison);
            $entityManager->flush();
        }

        return $this->redirectToRoute('resmaison_index');
    }
}
