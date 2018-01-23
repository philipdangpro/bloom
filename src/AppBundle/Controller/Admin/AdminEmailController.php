<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\Category;
use AppBundle\Entity\EmailTemplate;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ManagerRegistry;

class AdminEmailController extends Controller
{

    /**
     * @Route("/admin/email/template/list", name="admin.email.template.list")
     */
    public function listAction(Request $request)
    {

        return $this->render('admin/email.template.list.html.twig',
            [
                'title' => 'List of email templates'
            ]);
    }

}