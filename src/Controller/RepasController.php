<?php

namespace App\Controller;

use App\Entity\Repas;
use App\Form\RepasType;
use App\Repository\RepasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Knp\Component\Pager\PaginatorInterface;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\VAxis;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Histogram;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\LineChart;
use CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;




/**
 * @Route("/repas")
 */
class RepasController extends AbstractController
{
    /**
    * 
     * @Route("/statistique", name="repas/statistique")
     */
    public function Stat()
    {
        $repository = $this->getDoctrine()->getRepository(repas::class);
        $repas = $repository->findAll();
        $em = $this->getDoctrine()->getManager();
        
        $sg=0; 
        $veg=0;
        $vg=0;
        $hl=0;
        $db=0;

        foreach ($repas as $repas)
        {
            if (  $repas->getCategory()=="sans-gluten")  :
            
                    $sg+=1; 
             elseif ($repas->getCategory()=="Vegan"):

                 $veg +=1; 
             elseif ($repas->getCategory()=="Halal") :
             $hl +=1;  
             elseif($repas->getCategory()=="Diabetique") :
              $db +=1; 
              else  : $vg +=1;

             endif;



        }
        

    $pieChart = new PieChart();


    $pieChart->getData()->setArrayToDataTable(
        
        [['Categorie', 'nombre'],
        
         ['sans-gluten',  $sg],
         ['Vegan',   $veg],
         ['Halal',  $hl],
         ['Diabetique', $db],
         ['vegetarien',   $vg],
    ]
);
           
    


     
    $pieChart->getOptions()->setTitle('Type des Annonces repas ');
    $pieChart->getOptions()->setHeight(500);
    $pieChart->getOptions()->setWidth(900);
    $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
    $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
    $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
    $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
    $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

    return $this->render('repas/stat.html.twig', array('piechart' => $pieChart));
    }
/**
 * 
     * @Route("/newrepas", name="repas_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $repa = new Repas();
        $form = $this->createForm(RepasType::class, $repa);
        $form->handleRequest($request);
        

        if ($form->isSubmitted() && $form->isValid()) {

            $img = $request->files->get('repas')['img'];
            $uploads_directory = $this->getParameter('uploads_directory');

            $filename = md5(uniqid()) . '.' . $img->guessExtension();
            $img->move(
                $uploads_directory,
                $filename

            );
            $entityManager = $this->getDoctrine()->getManager();


        $repa->setimg($filename);


           $entityManager->persist($repa);

            $entityManager->flush();

            return $this->redirectToRoute('repas_index');
        }

        return $this->render('repas/new.html.twig', [
            'repa' => $repa,
            'form' => $form->createView(),
        ]);
    }

    

    /**
     * @Route("/", name="repas_index", methods={"GET"})
     */


    public function index(RepasRepository $repasRepository,Request $request, PaginatorInterface $paginator): Response
    {
       
        $Repository=$this -> getDoctrine () -> getRepository (repas::class);
        $repas= $Repository -> findAll();
        $repas = $paginator->paginate(
            $repas,
            $request->query->getInt('page',1),
            4
        );
        
        return $this->render('repas/showrepas.html.twig', [
            'repas' => $repas ]);
    }

    /**
     * @Route("/repas_back", name="repas_back", methods={"GET"})
     */
    public function index_back(RepasRepository $repasRepository,Request $request, PaginatorInterface $paginator): Response
    {
        
        $Repository=$this -> getDoctrine () -> getRepository (repas::class);
        $repas= $Repository -> findAll();
        $repas = $paginator->paginate(
            $repas,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('repas/showbackrepas.html.twig', [
            'repas' => $repas ]);
    }


    /**
     * @Route("/{id}", name="singlerepas_show", methods={"GET"})
     */
    public function show(repas $repas): Response
    {
        return $this->render('repas/showsolo.html.twig', [
            'repas' => $repas,
        ]);
    }



    /**
    * Creates a new ActionItem entity.
    *
    * @Route("/search", name="ajax_search")
    * @Method("GET")
    */
    
    public function searchAction(Request $request)
  {
    $repository = $this->getDoctrine()->getRepository(repas::class);
    $requestString= $request->get('searchValue');
    $repas = $repository->findBystring($requestString);
    $jsonContent = $Normalizer->normalize($repas, 'json',['groups'=>'repas']);
    $retour=json_encode($jsonContent);
    return new Response($retour);

  }

  


    /**
     * @Route("/{id}/edit", name="repas_edit", methods={"GET","POST"})
     */
    function update(RepasRepository $repository, $id, Request $request)
    {
        $repas=$repository->find($id);
        $form=$this->createForm(RepasType::class,$repas);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('repas_back');
        }
        return $this->render('repas/edit.html.twig',
            ['form'=>$form->createView()]);
    }

    


    /**
     * @Route("/trinom", name="trinom")
     */
    public function Trinom(Request $request,PaginatorInterface $paginator)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT e FROM App\Entity\Repas e 
            ORDER BY e.nom' 
        );
        
        $repas = $query->getResult(); 
        
        $repas = $paginator->paginate(
            $repas,
            $request->query->getInt('page',1),
            4
        );

        return $this->render('repas/showbackrepas.html.twig', 
        array('repas' => $repas));
    
    }
   
        
        
    /**
     * @Route("/triid", name="triid")
     */

    public function Triid(Request $request,PaginatorInterface $paginator)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT e FROM App\Entity\Repas e 
            ORDER BY e.id' 
        );
            
        
            $repas = $query->getResult(); 
            $repas = $paginator->paginate(
            $repas,
            $request->query->getInt('page',1),
            4
        );


        return $this->render('repas/showbackrepas.html.twig', 
        array('repas' => $repas));
    
    }


    public function sendNotification(Request $request)
    {
      $manager = $this->get('mgilet.notification');
      $notif = $manager->createNotification('Hello world!');
      $notif->setMessage('This a notification.');
      $notif->setLink('https://symfony.com/');
      // or the one-line method :
      // $manager->createNotification('Notification subject', 'Some random text', 'https://google.fr/');

      // you can add a notification to a list of entities
      // the third parameter `$flush` allows you to directly flush the entities
      $manager->addNotification(array($this->getUser()), $notif, true);
      }


    /**
     * @Route("/repas_back/{id}", name="repas_delete", methods={"GET","DELETE"})
     */
    public function delete($id, RepasRepository $repository){

        $repas=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($repas);
        $em->flush();
        return $this->redirectToRoute('repas_back');
    }

    
    
    



}





