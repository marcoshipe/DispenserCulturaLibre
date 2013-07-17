<?php

namespace DCL\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientController extends Controller
{
    public function indexAction()
    {
        return $this->render('DCLFrontendBundle:Home:index.html.twig');
    }
}
