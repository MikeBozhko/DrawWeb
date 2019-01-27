<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class TShortsController extends Controller
{
    /**
     * @Route("/t-shorts", name="t_shorts")
     */
    public function index()
    {
        return $this->render('t_shorts/index.html.twig', [
            'controller_name' => 'TShortsController',
        ]);
    }
}
