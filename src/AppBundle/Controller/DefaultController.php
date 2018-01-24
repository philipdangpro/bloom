<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\RequestStack;

class DefaultController extends ImprovedController
{

    /**
     * @Route("/", name="default.index")
     */
    public function indexAction(ManagerRegistry $managerRegistry, Request $request, RequestStack $requestStack)
    {
//        $faker = \Faker\Factory::create('fr_FR');
//        dump($faker);
//        die;

        $categoriesLeft = $managerRegistry
            ->getRepository(Category::class)
            ->findAll();


        $categoriesRight = array_splice($categoriesLeft, floor(count($categoriesLeft)/2)+1);

        return $this->render('default/index.html.twig',
            [
                'requestStack' => $requestStack,
                'categoriesLeft' => $categoriesLeft,
                'categoriesRight' => $categoriesRight,
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
     * @Route("/login", name="default.subscribe")
     */
    public function subscribeAction(Request $request)
    {
        return $this->render('default/subscribe.html.twig',
            [
                'title' => 'Inscription',
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