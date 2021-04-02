<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormBuilderInterface;
use App\Entity\Article;
use App\Repository\ArticleRepository;
use App\Form\ArticleType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\File;
use Knp\Component\Pager\PaginatorInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

class ArticleController extends AbstractController
{
    
    /**
     * @Route("/article", name="article")
     */
    public function index(): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }
    /**
     * @Route("/AfficheArticle", name="AfficheArticle")
     */
    public function AfficheArticle(Request $request, PaginatorInterface $paginator){
       $repository=$this->getDoctrine()->getRepository(Article::class); 
       $article=$repository->findAll();
       $article=$paginator->paginate(
           $article, //on passe les données 
           $request->query->getInt('page', 1), //num de la page en cours, 1 par défaut
           6 //nbre d'articles par page  
       );
       return $this->render('article/Affiche.html.twig', 
       ['article'=>$article]); 
    }
    /**
     * @Route("/Boutique", name="Boutique")
     */
    public function Boutique(Request $request, PaginatorInterface $paginator){
        $repository=$this->getDoctrine()->getRepository(Article::class); 
        $article=$repository->findAll();
        $article=$paginator->paginate(
            $article, //on passe les données 
            $request->query->getInt('page', 1), //num de la page en cours, 1 par défaut
            6 //nbre d'articles par page  
        );
        return $this->render('article/AfficheArticles.html.twig', 
        ['article'=>$article]); 
     }
    /**
     * @Route("/Liste", name="Liste")
     */
    public function Liste(){
        $repository=$this->getDoctrine()->getRepository(Article::class); 
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $article=$repository->findAll();
        
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('article/liste.html.twig', 
        ['article'=>$article]); 
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("Liste_des_articles.pdf", [
            "Attachment" => true
        ]);

        
     }

         

    /**
     * @Route("/triid", name="triid")
     */
    /* 
    public function Triid(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT a FROM App\Entity\Article a 
            ORDER BY a.id' 
        );
            
    
        $rep = $query->getResult(); 

        return $this->render('article/Affiche.html.twig', 
        array('article' => $rep));
    
    }*/
     
    /**
     * @Route("/SupprimerArticle/{id}", name="SupprimerArticle")
     */
    public function SupprimerArticle($id, ArticleRepository $repository){
        $article=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();              
        return $this->redirectToRoute('AfficheArticle'); 
     }
    /**
     * @Route("/AjouterArticle", name="AjouterArticle")
     */
    public function AjouterArticle(Request $request){
        $article=new Article();
        $form=$this->createForm(ArticleType::class, $article);
      
        $form->handleRequest($request);        
        if($form->isSubmitted() && $form->isValid()){
            $image=$request->files->get('article')['image'];
            $uploads_directory=$this->getParameter('uploads_directory');
            $filename=md5(uniqid()) . '.' . $image->guessExtension();
            $image->move(
                $uploads_directory,
                $filename
            );

            $article->setImage($filename);
            $em=$this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush(); 
            return $this->redirectToRoute('AfficheArticle'); 
        }
                       
        return $this->render('article/Ajout.html.twig', 
       ['form'=>$form->createView()]); 
     }
    
    /**
     * @Route("/ModifierArticle/{id}", name="ModifierArticle")
     */
    function ModifierArticle(ArticleRepository $repository, $id, Request $request, \Swift_Mailer $mailer){
        $article=$repository->find($id);
        $form=$this->createForm(ArticleType::class,$article);
        
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $image=$request->files->get('article')['image'];
            $uploads_directory=$this->getParameter('uploads_directory');
            $filename=md5(uniqid()) . '.' . $image->guessExtension();
            $image->move(
                $uploads_directory,
                $filename
            );

            $article->setImage($filename);
            $em=$this->getDoctrine()->getManager();
            $em->flush(); 
            $contact = $form->getData(); 
            

            $message = (new \Swift_Message('New'))

            ->setFrom('zemni.norchene@gmail.com')

            ->setTo('zemni.norchene@gmail.com')

            ->setSubject('Article bien modifié')


            ->setBody(
                $this->renderView(
                    'Emails/contact.html.twig'),
                   
                    'text/html'
                );
                
   
            $mailer->send($message); 
            $this->addFlash('message', 'le message a bien ete envoye');
            return $this->redirectToRoute('AfficheArticle'); 
        }
        return $this->render('article/Modifier.html.twig', 
       ['form'=>$form->createView()]); 
    }
}
