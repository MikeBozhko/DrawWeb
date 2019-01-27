<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class LibController extends Controller
{
    /**
     * @Route("/lib", name="lib")
     */
    public function index()
    {
        return $this->render('lib/index.html.twig', [
            'controller_name' => 'LibController',
        ]);
    }
}
