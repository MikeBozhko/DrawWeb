<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DonateController extends Controller
{
    /**
     * @Route("/donate", name="donate")
     */
    public function index()
    {
        return $this->render('donate/index.html.twig', [
            'controller_name' => 'DonateController',
        ]);
    }
}
