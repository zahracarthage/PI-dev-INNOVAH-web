<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormBuilderInterface;
use App\Entity\Commande;
use App\Repository\CommandeRepository;
use App\Form\CommandeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class CommandeController extends AbstractController
{
    /**
     * @Route("/commande", name="commande")
     */
    public function index(): Response
    {
        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
        ]);
    }
    /**
     * @Route("/AfficheCommande", name="AfficheCommande")
     */
    public function AfficheCommande(){
        $repository=$this->getDoctrine()->getRepository(Commande::class); 
        $commande=$repository->findAll();
        return $this->render('commande/AfficheC.html.twig', 
        ['commande'=>$commande]); 
     }

    /**
     * @Route("/ImprimerCommande", name="ImprimerCommande")
     */
    public function ImprimerCommande(){
        $repository=$this->getDoctrine()->getRepository(Commande::class); 
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $commande=$repository->findAll();
        
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('commande/Commande.html.twig', 
        ['commande'=>$commande]); 
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        
        // Output the generated PDF to Browser (force download)
        $dompdf->stream("Commande_finale.pdf", [
            "Attachment" => true
        ]);

        
     } 

    /**
     * @Route("/triid", name="triid")
     */

    public function Triid(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT c FROM App\Entity\Commande c 
            ORDER BY c.date' 
        );
            
    
        $rep = $query->getResult(); 

        return $this->render('commande/AfficheC.html.twig', 
        array('commande' => $rep));
    
    } 
    /**
     * @Route("/SupprimerCommande/{id}", name="SupprimerCommande")
     */
    public function SupprimerCommande($id, CommandeRepository $repository){
        $commande=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($commande);
        $em->flush();              
        return $this->redirectToRoute('AfficheCommande'); 
     }
    /**
     * @Route("/AjouterCommande", name="AjouterCommande")
     */
    public function AjouterCommande(Request $request){
        $commande=new Commande();
        $form=$this->createForm(CommandeType::class, $commande);
        
        $form->handleRequest($request);        
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($commande);
            $em->flush(); 
            return $this->redirectToRoute('AfficheCommande'); 
        }
                       
        return $this->render('commande/AjoutC.html.twig', 
       ['form'=>$form->createView()]); 
     } 
    /**
     * @Route("/ModifierCommande/{id}", name="ModifierCommande")
     */
    function ModifierCommande(CommandeRepository $repository, $id, Request $request){
        $commande=$repository->find($id);
        $form=$this->createForm(CommandeType::class,$commande);
        
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush(); 
            return $this->redirectToRoute('AfficheCommande'); 
        }
        return $this->render('commande/ModifierC.html.twig', 
       ['form'=>$form->createView()]); 
    } 
}
