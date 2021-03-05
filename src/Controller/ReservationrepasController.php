<?php

namespace App\Controller;

use App\Entity\Reservationrepas;
use App\Form\ReservationrepasType;
use App\Repository\ReservationrepasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservationrepas")
 */
class ReservationrepasController extends AbstractController
{
    /**
     * @Route("/", name="reservationrepas_index", methods={"GET"})
     */
    public function index(ReservationrepasRepository $reservationrepasRepository): Response
    {
        return $this->render('reservationrepas/index.html.twig', [
            'reservationrepas' => $reservationrepasRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="reservationrepas_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $reservationrepa = new Reservationrepas();
        $form = $this->createForm(ReservationrepasType::class, $reservationrepa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reservationrepa);
            $entityManager->flush();

            return $this->redirectToRoute('reservationrepas_index');
        }

        return $this->render('reservationrepas/new.html.twig', [
            'reservationrepa' => $reservationrepa,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservationrepas_show", methods={"GET"})
     */
    public function show(Reservationrepas $reservationrepa): Response
    {
        return $this->render('reservationrepas/show.html.twig', [
            'reservationrepa' => $reservationrepa,
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
     * @Route("/{id}", name="reservationrepas_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Reservationrepas $reservationrepa): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationrepa->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reservationrepa);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservationrepas_index');
    }
}
