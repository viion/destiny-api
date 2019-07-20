<?php

namespace App\Controller;

use App\Service\Destiny\DestinyApiProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @var DestinyApiProvider
     */
    private $api;
    
    public function __construct(DestinyApiProvider $api)
    {
        $this->api = $api;
    }
    
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('app.html.twig');
    }
    
    /**
     * Request a Destiny 2 login
     *
     * @Route("/d2/login", name="d2_login")
     */
    public function login()
    {
        return $this->redirect(
            $this->api->auth()->requestAuthorisation()
        );
    }
    
    /**
     * Destiny 2 login is OK
     *
     * @Route("/d2/login/ok", name="d2_login_ok")
     */
    public function authorised(Request $request)
    {
        // todo - handle state for CSRF
        $state = $request->get('state');
        $code  = $request->get('code');
        
        // get token
        $token = $this->api->auth()->requestToken($code);
        
        // store token
        $this->api->auth()->setToken($token);
  
        // redirect back to the home
        return $this->redirectToRoute('home');
    }
    
    /**
     * Destiny 2 token refresh
     *
     * @Route("/d2/login/refresh", name="d2_login_refresh")
     */
    public function refresh()
    {
        // request a new token
        $token = $this->api->auth()->refreshToken();
    
        // store token
        $this->api->auth()->setToken($token);
    
        // redirect back to the home
        return $this->redirectToRoute('home');
    }
}
