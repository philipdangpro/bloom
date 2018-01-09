<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ImprovedController extends Controller
{
    const ZONE = [
        "front" => "css/narrow-jumbotron/narrow-jumbotron.css",
        "login" => "css/signin.css",
        "admin" => "",
        "blog"  => "",
    ];

    /*
     * @string $cssFilePath
     */
    protected function getCustomCss($zone)
    {
        return self::ZONE[$zone];
    }

}