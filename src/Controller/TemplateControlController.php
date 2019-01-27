<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TemplateControlController extends AbstractController
{
    /**
     * @Route("/template/control", name="template_control")
     */
    public function index()
    {
        return $this->render('template_control/index.html.twig', [
            'controller_name' => 'TemplateControlController',
        ]);
    }
}
