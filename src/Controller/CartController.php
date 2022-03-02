<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\ArticleRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Services\Cart\CartService;
use App\Entity\Article;

class CartController extends AbstractController
{
    /**
     * @Route("/panier", name="cart_index")
     */
    public function index(CartService $cartService)
    {
        
        return $this->render('article/Cart.html.twig', [
            'items' => $cartService->getFullCart(),
            'total' => $cartService->getTotal()
        ]);
    }
    
    /**
     * @Route("/panier/add/{id}", name="cart_add")
     */
    public function add($id, CartService $cartService)
    {
      
        $cartService->add($id);
        return $this->redirectToRoute('cart_index');

    }

    /**
     * @Route("/panier/remove/{id}", name="cart_remove")
     */
    public function remove($id, CartService $cartService)
    {
        $cartService->remove($id);
        
        return $this->redirectToRoute('cart_index');

    }

    /**
     * @Route("/create-checkout-session", name="checkout")
     */
    public function checkout(CartService $cartService)
    {
        \Stripe\Stripe::setApiKey('your stripe key');
        
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
              'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                  'name' => 'Total Commande',
                ],
                'unit_amount' => $cartService->getTotal()*100,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('error', [], UrlGeneratorInterface::ABSOLUTE_URL),
          ]);
          
          return new JsonResponse([ 'id' => $session->id ]);
    }

    /**
     * @Route("/success", name="success")
     */
    public function success(CartService $cartService, \Swift_Mailer $mailer)
    {
        
        $message = (new \Swift_Message('New'))

            ->setFrom('zemni.norchene@gmail.com')

            ->setTo('zemni.norchene@gmail.com')

            ->setSubject('Votre commande KifTrip a été enregistrée !')


            ->setBody(
                $this->renderView(
                    'Emails/Commande.html.twig'),
                   
                    'text/html'
                );
                
   
            $mailer->send($message); 
            $this->addFlash('message', 'le message a bien ete envoye');
        return $this->render('article/Success.html.twig');
    }
    /**
     * @Route("/error", name="error")
     */
    public function error()
    {
        return $this->render('article/Error.html.twig');
    }
    
    
}
