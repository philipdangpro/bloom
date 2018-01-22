<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
    * @Route("/admin/login", name="admin.login")
    */
    public function loginAction(Request $request)
    {
        return $this->render('admin/login.html.twig',
        []);
    }

}