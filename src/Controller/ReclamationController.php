<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/reclamation")
 */
class ReclamationController extends AbstractController
{
    /**
     * @Route("/", name="reclamation_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $Repository=$this -> getDoctrine () -> getRepository (reclamation::class);
        $reclamation= $Repository -> findAll();
        $reclamation = $paginator->paginate(
            $reclamation,
            $request->query->getInt('page',1),
            5
        );
        return $this->render('reclamation/index.html.twig', [
            'reclamation' => $reclamation, ]);
    }

    /**
     * @Route("/newreclamation", name="reclamation_new", methods={"GET","POST"})
     */
    public function new(Request $request,\Swift_Mailer $mailer): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reclamation);
            $entityManager->flush();

            $contact = $form->getData(); 
            $nom=$contact->getNom();
            $prenom=$contact->getPrenom();

            $message = (new \Swift_Message('New'))

            ->setFrom('zcarthage@gmail.com')

            ->setTo($contact->getEmail())

            ->setSubject('Thank you for reaching out to us')


            ->setBody(
                $this->renderView(
                    'emails/contact.html.twig',
                    array('nom' => $nom,
                    'prenom' => $prenom)),
                    'text/html'
                )
                ;

   
            $mailer->send($message); 
            $this->addFlash('message', 'le message a bien ete envoye'); 
            return $this->redirectToRoute('reclamation_new');
            

        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    


    /**
     * @Route("/{id}/edit", name="reclamation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reclamation $reclamation): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reclamation_index');
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}", name="reclamation_delete", methods={"GET","DELETE"})
     */
        public function delete($id, ReclamationRepository $repository){
     $reclamation=$repository->find($id);
     $em=$this->getDoctrine()->getManager();
     $em->remove($reclamation);
     $em->flush();
     return $this->redirectToRoute('reclamation_index');
    }

    
    
}
