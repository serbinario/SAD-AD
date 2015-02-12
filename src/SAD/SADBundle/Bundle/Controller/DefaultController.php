<?php

namespace SAD\SADBundle\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    
    /**
     * @Route("/login", name="login")
     * @Template()
     */
    public function loginAction(Request $request)
    {
        $req = $request->request->all();
        
        $username = $req['username'];
        $password = $req['password'];
        
        if($username === "sad" && $password === "sad") {
            return $this->redirect($this->generateUrl("home")); 
        } else {
            $this->get("session")->getFlashBag()->add('danger', "Login ou senha inválidos");
            return $this->redirect($this->generateUrl("index")); 
        }       
    }
    
    /**
     * @Route("/home", name="home")
     * @Template()
     */
    public function homeAction()
    {
        return array();
    }
    
    /**
     * @Route("/emprego", name="emprego")
     * @Template()
     */
    public function empregoAction()
    {
        return array();
    }
    
    /**
     * @Route("/empreendedor", name="empreendedor")
     * @Template()
     */
    public function empreendedorAction()
    {
        return array();
    }
    
    /**
     * @Route("/autonomo", name="autonomo")
     * @Template()
     */
    public function autonomoAction()
    {
        return array();
    }
    
    /**
     * @Route("/logout", name="logout")
     * @Template()
     */
    public function logoutAction()
    {
        return $this->redirect($this->generateUrl("index"));
    }
}
