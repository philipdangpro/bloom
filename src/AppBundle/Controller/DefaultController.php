<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="default.index")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig', []);
    }

    /**
     * @Route("/login", name="default.login")
     */
    public function loginAction(Request $request)
    {
        return $this->render('default/login.html.twig', []);
    }

    /**
     * @Route("/contact", name="default.contact")
     */
    public function contactAction(Request $request)
    {
        return $this->render('default/contact.html.twig', []);
    }

    /**
     * @Route("/informations-pratiques", name="default.infos")
     */
    public function infosAction(Request $request)
    {
        return $this->render('default/informations-pratiques.html.twig', []);
    }

    /**
     * @Route("/mentions-legales", name="default.mentions")
     */
    public function mentionsAction(Request $request)
    {
        return $this->render('default/mentions-legales.html.twig', []);
    }
}
