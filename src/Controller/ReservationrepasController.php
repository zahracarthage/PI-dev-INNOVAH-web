<?php

namespace App\Controller;

use App\Entity\Reservationrepas;
use App\Entity\Repas;
use App\Form\ReservationrepasType;
use App\Repository\ReservationrepasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Dompdf\Dompdf;
use Dompdf\Options;


/**
 * @Route("/reservationrepas")
 */
class ReservationrepasController extends AbstractController
{
    /**
     * @Route("/", name="reservationrepas_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $Repository=$this -> getDoctrine () -> getRepository (reservationrepas::class);
        $reservationrepas= $Repository -> findAll();
        $reservationrepas = $paginator->paginate(
            $reservationrepas,
            $request->query->getInt('page',1),
            5
        );
        return $this->render('reservationrepas/index.html.twig', [
            'reservationrepas' => $reservationrepas ]);
    }


    




    /**
     * @Route("/new", name="reservationrepas_new", methods={"GET","POST"})
     */
    public function new(Request $request,\Swift_Mailer $mailer): Response
    {
        $reservationrepa = new Reservationrepas();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(ReservationrepasType::class, $reservationrepa);
        $form->handleRequest($request);
        $id= $request->get('id');
        $adresse= $request->get('adresse');

        $repas=$em->getRepository(Repas::class)->find($id);


        if ($form->isSubmitted() && $form->isValid()) {


            $reservationrepa->setIdr($repas);

            $entityManager = $this->getDoctrine()->getManager();
            $em->persist($reservationrepa);
            $entityManager->flush();

            $query = $em->createQuery(
                'SELECT p.adresse
                FROM App\Entity\Repas p
                WHERE p.id = :id
               '
            )
            ->setParameter('id', $id);
    
            $adresse=$query->getResult();
            


            $contact= $form->getData(); 
            $nom= $contact->getNom(); 
            $phone = $contact->getPhone();
            $date=$contact->getDate();
            $heure=$contact->getHeure();
            $id=$contact->getId();
            $nbrpersonnes=$contact->getNbrpersonnes();
            $message=$contact->getMessage();

   
            $pdfOptions = new Options();
            $pdfOptions->set('isRemoteEnabled', true);

            $pdfOptions->set('defaultFont', 'Arial');
     
            // Instantiate Dompdf with our options
            $dompdf = new Dompdf($pdfOptions);
            // Retrieve the HTML generated in our twig file
            $html = $this->renderView('emails/pdf.html.twig', array('nom' => $nom,
            'date' => $date, 
            'heure' => $heure,
            'phone'=> $phone,
                'id'=>$id,
                'message'=>$message,
                'repas'=>$repas,
                'adresse'=>$adresse,
                'nbrpersonnes'=>$nbrpersonnes));
     
            // Load HTML to Dompdf
            $dompdf->loadHtml($html);
     
            // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
            $dompdf->setPaper('A4', 'portrait');
     
            // Render the HTML as PDF
            $dompdf->render();
     
            // Output the generated PDF to Browser (inline view)

            $output = $dompdf->output();

            $pdf_directory = $this->getParameter('pdf_directory');
            // e.g /var/www/project/public/mypdf.pdf
            $pdfFilepath =  $pdf_directory . '/invoice.pdf';
            
            // Write file to the desired path
            file_put_contents($pdfFilepath, $output);
                
   
            $message = (new \Swift_Message())


            
            ->setFrom('zcarthage@gmail.com')
            ->setTo($contact->getEmail())
            ->setSubject('Booking confirmation')

            ->attach(\Swift_Attachment::fromPath($pdf_directory . '/invoice.pdf'))
            


            ->setBody(
                $this->renderView(
                    'emails/confirmationbooking.html.twig',
                    array('nom' => $nom,
                    'date' => $date, 
                    'heure' => $heure,
                        'id'=>$id,
                        'repas'=>$repas,
                        'adresse'=>$adresse,
                        'nbrpersonnes'=>$nbrpersonnes
                        
            )), 
                    'text/html'
                )


                ;

            

            $mailer->send($message); 

            return $this->redirectToRoute('reservationrepas_index');
        }

        return $this->render('reservationrepas/new.html.twig', [
            'reservationrepa' => $reservationrepa,
            'form' => $form->createView(),
        ]);
    }
 

    /**
     * @Route("/{id}/edit", name="reservationrepas_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reservationrepas $reservationrepa): Response
    {
        $form = $this->createForm(ReservationrepasType::class, $reservationrepa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservationrepas_index');
        }

        return $this->render('reservationrepas/edit.html.twig', [
            'reservationrepa' => $reservationrepa,
            'form' => $form->createView(),
        ]);
    }

    
    /**
     * @Route("/reservationrepas/{id}", name="reservationrepas_delete", methods={"GET","DELETE"})
     */
    public function delete($id, ReservationrepasRepository $repository){

        $reservationrepas=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($reservationrepas);
        $em->flush();
        return $this->redirectToRoute('reservationrepas_index');
    }

    

     /**
     * @Route("/trireservationparnom", name="trireservationparnom")
     */

    public function Trinom(Request $request, ReservationrepasRepository $repository, PaginatorInterface $paginator)
    {
        $em = $this->getDoctrine()->getManager();


        $query = $em->createQuery(
            'SELECT r FROM App\Entity\Reservationrepas r 
            ORDER BY r.nom' 
        );

        $repository=$this -> getDoctrine () -> getRepository (reservationrepas::class);
        $reservationrepas = $query->getResult(); 

        $reservationrepas = $paginator->paginate(
            $reservationrepas,
            $request->query->getInt('page',1),
            5
        );
            
            
        return $this->render('reservationrepas/index.html.twig', 
        array('reservationrepas' => $reservationrepas));
    
    }

    /**
     * @Route("/trireservationparid", name="trireservationparid")
     */

    public function Triid(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT r FROM App\Entity\Reservationrepas r 
            ORDER BY r.id'
        );
            
    
        $rep = $query->getResult(); 

        return $this->render('reservationrepas/index.html.twig', 
        array('reservationrepas' => $rep));
    
    }

    
   
    


}


