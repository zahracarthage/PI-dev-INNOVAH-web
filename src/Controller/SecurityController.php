<?php

namespace App\Controller;

use App\Form\RegistrationType;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Users;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request, EntityManagerInterface $em, UserPasswordEncoderInterface $encoder, \Swift_Mailer $mailer)
    {
        $user = new Users();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();
             $uploads_directory = $this->getParameter('uploads_directory');

             $filename = md5(uniqid()) . '.' . $image->guessExtension();
            $image->move(
               $uploads_directory,
               $filename

            );
            $user->setImage($filename);

            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);


            $user->setActivationToken(md5(uniqid()));
            $message = (new \Swift_Message('Activation de votre compte'))
                ->setFrom('mmoussa1941@gmail.com')
                ->setTo($user->getEmail())
                ->setBody($this->renderView(
                    'emails/activation.html.twig', ['token' => $user->getActivationToken()]
                ),
                    'text/html');
            $mailer->send($message);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('security_login');
        }




        return $this->render('security/registration.html.twig',
            ['form' =>$form->createView()]);

    }

    /**
     * @Route("/connexion",name="security_login")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {

            // get the login error if there is one
            $error = $authenticationUtils->getLastAuthenticationError();
            // last username entered by the user
            $lastUsername = $authenticationUtils->getLastUsername();



         return $this->render('security/login.html.twig',
            ['lastUsername'=>$lastUsername,'error' => $error]);

    }
    /**
     * @Route("/deconnexion",name="security_logout")
     */
    public function logout()
    { }

    /**
     * @Route("/",name="home")
     *
     */
    public function index()
    {
        return $this->render('user/profile.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

    /**
     * @Route("/activation/{token}", name="activation")
     */
    public function activation($token, UsersRepository $users)
    {
        // On recherche si un utilisateur avec ce token existe dans la base de données
        $user = $users->findOneBy(['activation_token' => $token]);

        // Si aucun utilisateur n'est associé à ce token
        if(!$user){
            // On renvoie une erreur 404
            throw $this->createNotFoundException('Cet utilisateur n\'existe pas');
        }

        // On supprime le token
        $user->setActivationToken(null);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        // On génère un message
        $this->addFlash('message', 'Utilisateur activé avec succès');

        // On retourne à l'accueil
        return $this->redirectToRoute('home');
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        /*if ($targetPath = $this->getTargetPath($request->getSession(), $providerKey)) {
            return new RedirectResponse($targetPath);
        }*/
        // For example : return new RedirectResponse($this->urlGenerator->generate('some_route'));
        //throw new \Exception('TODO: provide a valid redirect inside '.__FILE__);
        {
            // Get list of roles for current user
            $roles = $token->getRoles();
            // Tranform this list in array
            $rolesTab = array_map(function($role){
                return $role->getRole();
            }, $roles);
            // If is a admin or super admin we redirect to the backoffice area
            if (in_array('ROLE_ADMIN', $rolesTab, true))
                $redirection = new RedirectResponse($this->urlGenerator->generate('admin_utilisateurs'));
            else
                $redirection = new RedirectResponse($this->router->generate('user'));

            return $redirection;
        }
    }

}
