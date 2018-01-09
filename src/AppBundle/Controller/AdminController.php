<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends ImprovedController
{
    /**
     * @Route("/admin/login", name="admin.login")
     */
    public function loginAction(Request $request)
    {
        return $this->render('admin/login.html.twig',
            [

            ]);
    }

    /**
     * @Route("/admin/index", name="admin.index")
     */
    public function indexAction(Request $request)
    {
        return $this->render('admin/index.html.twig',
            [

            ]);
    }
}