<?php

namespace CNC\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CNCProductBundle:Product:index.html.twig');
    }
}
