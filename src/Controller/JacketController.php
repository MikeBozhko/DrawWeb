<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class JacketController extends Controller
{
    /**
     * @Route("/jacket", name="jacket")
     */
    public function index()
    {
        return $this->render('jacket/index.html.twig', [
            'controller_name' => 'JacketController',
        ]);
    }
}
