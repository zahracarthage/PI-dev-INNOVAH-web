<?php

namespace App\Controller;

use App\Entity\Maisonhote;
use App\Form\MaisonhoteType;
use App\Repository\MaisonhoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;


/**
 * @Route("/maisonhote")
 */
class MaisonhoteController extends AbstractController
{


 /**
     * @Route("/statmaisonhote", name="statmaisonhote")
     */
    public function stat(){

        $repository = $this->getDoctrine()->getRepository(maisonhote::class);
        $maisonhote = $repository->findAll();

        $em = $this->getDoctrine()->getManager();

        
        $pr1=0; 
        $pr2=0;
      
       

        foreach ($maisonhote as $maisonhote)
        {
            if ( $maisonhote->getPrix()=="250")  :
            
                $pr1+=1; 
            else:

                $pr2+=1; 
             
            
             endif;

        }
        
        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['prix', 'nombre'],
                ['250', $pr1],
             ['50', $pr2],
            ]
        );
        $pieChart->getOptions()->setTitle('prix des maison d hote');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);
    
        return $this->render('maisonhote/stat.html.twig', array('piechart' => $pieChart));
        }









    /**
     * @Route("/listemaisonhote", name="maisonhote_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $repository = $this->getdoctrine()->getRepository(maisonhote::class);
        $maisonhotes= $repository->findAll();
        $maisonhotes = $paginator->paginate(
            $maisonhotes,
            $request->query->getInt('page',1),
            3
        );
        return $this->render('maisonhote/index.html.twig', [
            'maisonhotes' => $maisonhotes,
        ]);
    }



    /**
     * @Route("/trimaisonhote", name="trimaisonhote")
     */
    public function Tri(Request $request,PaginatorInterface $paginator)
    {
        $em = $this->getDoctrine()->getManager();
        

        $query = $em->createQuery(
            'SELECT n FROM App\Entity\Maisonhote n
            ORDER BY n.nom ' 
        );
        
        $maisonhotes = $query->getResult(); 
        
        $maisonhotes = $paginator->paginate(
            $maisonhotes,
            $request->query->getInt('page',1),
            4
        );

        return $this->render('maisonhote/index.html.twig', 
        array('maisonhotes' => $maisonhotes));
    
    }









    /**
     * @Route("/imprimmaison", name="imprimmaison")
     */
    public function imprimmaison(MaisonhoteRepository $MaisonhoteRepository): Response

    {

      // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        $maisonhotes = $MaisonhoteRepository->findAll();
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('maisonhote/imprimmaison.html.twig', [
           'maisonhotes' => $maisonhotes,
        ]);
        
        // Load HTML to Dompdf
       $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("Liste maison.pdf", [
            "Attachment" => true
        ]);
    }


    

    /**
     * @Route("/listmaisonhote", name="listmaisonhote")
     */
    public function list(Request $request, PaginatorInterface $paginator ): Response
    {
        $repository = $this->getdoctrine()->getRepository(maisonhote::class);
        $maisonhotes= $repository->findAll();
        $maisonhotes = $paginator->paginate(
            $maisonhotes,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('maisonhote/list.html.twig', [
            'maisonhotes' => $maisonhotes,
        ]);

    }



    /**
     * @Route("/new", name="maisonhote_new", methods={"GET","POST"})
     */
    public function new(Request $request, \Swift_Mailer $mailer): Response
    {
        $maisonhote = new Maisonhote();
        $form = $this->createForm(MaisonhoteType::class, $maisonhote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $maisonhote->getImage();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'),$filename);
            $maisonhote->setImage($filename);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($maisonhote);
            $entityManager->flush();


            $contact = $form->getData(); 
           

            $message = (new \Swift_Message('New'))

            ->setFrom('zaienebaccar2015@gmail.com')

            ->setTo('zaienebaccar2015@gmail.com')

            ->setSubject('Ajout maison')


            ->setBody(
                $this->renderView(
                    'emails/contact.html.twig'),
                    
                    'text/html'
                )
                ;
   
            $mailer->send($message); 
            $this->addFlash('message', 'Ajout réaliser avec succés');


            return $this->redirectToRoute('maisonhote_index');
        }

        return $this->render('maisonhote/new.html.twig', [
            'maisonhote' => $maisonhote,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="maisonhote_show", methods={"GET"})
     */
    public function show(Maisonhote $maisonhote): Response
    {
        return $this->render('maisonhote/show.html.twig', [
            'maisonhote' => $maisonhote,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="maisonhote_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Maisonhote $maisonhote): Response
    {
        $form = $this->createForm(MaisonhoteType::class, $maisonhote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $maisonhote->getImage();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'),$filename);
            $maisonhote->setImage($filename);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('maisonhote_index');
        }

        return $this->render('maisonhote/edit.html.twig', [
            'maisonhote' => $maisonhote,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="maisonhote_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Maisonhote $maisonhote): Response
    {
        if ($this->isCsrfTokenValid('delete'.$maisonhote->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($maisonhote);
            $entityManager->flush();
        }

        return $this->redirectToRoute('maisonhote_index');
    }






}
