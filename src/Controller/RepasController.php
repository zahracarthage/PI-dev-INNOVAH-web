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

/**
 * @Route("/repas")
 */
class RepasController extends AbstractController
{


    /**
     * @Route("/affichagesolo", name="repas_index3", methods={"GET"})
     */

    public function index3(RepasRepository $repasRepository): Response
    {
        return $this->render('repas/showsolo.html.twig', [
            'repas' => $repasRepository->findAll(),
        ]);
    }



    /**
     * @Route("/", name="repas_index", methods={"GET"})
     */


    public function index(RepasRepository $repasRepository): Response
    {
        return $this->render('repas/showrepas.html.twig', [
            'repas' => $repasRepository->findAll(),
        ]);
    }

    /**
     * @Route("/repas_back", name="repas_index2", methods={"GET"})
     */
    public function index2(RepasRepository $repasRepository): Response
    {
        return $this->render('repas/showbackrepas.html.twig', [
            'repas' => $repasRepository->findAll(),
        ]);
    }


    /**
     * @Route("/new", name="repas_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $repa = new Repas();
        $form = $this->createForm(RepasType::class, $repa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
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
            return $this->redirectToRoute('repas_index2');
        }
        return $this->render('repas/edit.html.twig',
            ['form'=>$form->createView()]);
    }





    /**
     * @Route("/{id}", name="repas_delete", methods={"GET","DELETE"})
     *
     */
    public function delete($id, RepasRepository $repository){

        $repas=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($repas);
        $em->flush();
        return $this->redirectToRoute('repas_index2');
    }




}





