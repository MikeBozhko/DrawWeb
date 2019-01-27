<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class CanvasController extends Controller
{
    /**
     * @Route("/canvas", name="canvas")
     */
    public function index()
    {
        $formatsData = [
            'Custom',
            'Booklet',
            'Diploma',
            'Post Card',
            'Business Card',
            'Menu',
            'A5',
            'A4',
            'A3',
            'A2',
        ];

        return $this->render('canvas/index.html.twig', [
            'controller_name' => 'CanvasController',
            'formData' => $formatsData,
        ]);
    }
}
