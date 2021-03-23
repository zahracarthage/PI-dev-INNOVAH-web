<?php

namespace App\Controller;

use App\Entity\Ev;
use App\Form\EvType;
use App\Repository\EvRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/ev")
 */
class EvController extends AbstractController
{
    /**
     * @Route("/", name="ev_index", methods={"GET"})
     */
    public function index(EvRepository $evRepository): Response
    {
        return $this->render('ev/index.html.twig', [
            'evs' => $evRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="ev_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $ev = new Ev();
        $form = $this->createForm(EvType::class, $ev);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ev= $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ev);
            $entityManager->flush();

            return $this->redirectToRoute('ev_index');
        }

        return $this->render('ev/new.html.twig', [
            'ev' => $ev,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ev_show", methods={"GET"})
     */
    public function show(Ev $ev): Response
    {
        return $this->render('ev/show.html.twig', [
            'ev' => $ev,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="ev_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Ev $ev): Response
    {
        $form = $this->createForm(EvType::class, $ev);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ev_index');
        }

        return $this->render('ev/edit.html.twig', [
            'ev' => $ev,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ev_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Ev $ev): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ev->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ev);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ev_index');
    }
}
