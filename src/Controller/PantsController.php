<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class PantsController extends Controller
{
    /**
     * @Route("/pants", name="pants")
     */
    public function index()
    {
        return $this->render('pants/index.html.twig', [
            'controller_name' => 'PantsController',
        ]);
    }
}
