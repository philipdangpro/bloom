<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ManagerRegistry;

class DefaultController extends ImprovedController
{

    /**
     * @Route("/", name="default.index")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig',
            [
                'title' => 'home',
                'style' => $this->getCustomCss('front')
            ]);
    }

    /**
     * @Route("/login", name="default.login")
     */
    public function loginAction(Request $request)
    {
        return $this->render('default/login.html.twig',
            [
                'title' => 'connexion',
                'asset' => $this->getCustomCss('front')
            ]);
    }

    /**
     * @Route("/contact", name="default.contact")
     */
    public function contactAction(Request $request)
    {
        return $this->render('default/contact.html.twig',
            [
                'title' => 'contact',
                'asset' => $this->getCustomCss('front')
            ]);
    }

    /**
     * @Route("/informations-pratiques", name="default.infos")
     */
    public function infosAction(Request $request)
    {
        return $this->render('default/infos.html.twig',
            [
                'title' => 'informations pratiques'
            ]);
    }

    /**
     * @Route("/mentions-legales", name="default.mentions")
     */
    public function mentionsAction(Request $request)
    {
        return $this->render('default/mentions.html.twig',
            [
                'title' => 'mentions légales'
            ]);
    }

    /**
     * @Route("/blog", name="default.blog")
     */
    public function blogAction(Request $request)
    {
        return $this->render('default/blog.html.twig',
            [
                'title' => 'blog',
                'style' => $this->getCustomCss('front')
            ]);
    }

    /**
     * @Route("/a-propos", name="default.apropos")
     */
    public function aproposAction(Request $request)
    {
        return $this->render('default/apropos.html.twig',
            [
                'title' => 'à propos',
                'style' => $this->getCustomCss('front')
            ]);
    }

    /**
     * @Route("/test", name="default.test")
     */
    public function testAction(ManagerRegistry $doctrine) //injecter
    {
        $category = new Category;
        $em = $doctrine->getManager();
        $category->translate('fr')->setName('Chaussures');
        $category->translate('en')->setName('Shoes');

        $category->mergeNewTranslations();

        $em->persist($category);


        $em->flush();

//        return $this->render('default/index.html.twig');
    }
}