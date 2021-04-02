<?php

namespace App\Controller;
use App\Form\EdituserType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UsersRepository;
use App\Entity\Users;
use Knp\Component\Pager\PaginatorInterface;


/**
 * @Route("/admin", name="admin_")
 */

 class AdminController extends AbstractController
 {
    /**
     * @Route("/utilisateurs", name="utilisateurs")
     */
    public function usersList(UsersRepository $user, Request $request, PaginatorInterface $paginator) {
        $repository=$this->getDoctrine()->getRepository(users::class);
        $user=$repository->findAll();
        $user = $paginator->paginate(
            $user, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            5 // Nombre de résultats par page
        );
        return $this->render("admin/users.html.twig",[
            'users' => $user
        ]);
    }

     /**
      * @Route("/utilisateurs/modifier/{id}", name="modifier_utilisateur")
      */
     public function editUser(Request $request, Users $user, UsersRepository $repository, $id) {

        $admin=$repository->find($id);

        $form = $this->createForm(EdituserType::class, $user);

         $form->handleRequest($request);
         if($form->isSubmitted() && $form->isValid()) {
            $em=$this->getDoctrine()->getManager();

             $em->flush();

             return $this->redirectToRoute('admin_utilisateurs');
         }

         return $this->render('admin/editUser.html.twig', ['formUser' => $form->createView()]);
 }

     /**
      * @Route("/utilisateurs/supprimer/{id}", name="supprimer_utilisateur")
      */
     public function deleteUser($id) {

         $user=$this->getDoctrine()->getRepository(Users::class)->find($id);
         $em=$this->getDoctrine()->getManager();
         $em->remove($user);
         $em->flush();
         return $this->redirectToRoute('admin_utilisateurs');
     }
 }

