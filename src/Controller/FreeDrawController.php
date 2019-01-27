<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Routing\Annotation\Route;

class FreeDrawController extends Controller
{
    /**
     * @Route("/canvas/drawing/", name="draw")
     * @
     */
    public function index()
    {
        $formatsData = [
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
            'https://www.wonderplugin.com/videos/demo-image0.jpg',
        ];

        return $this->render('free_draw/index.html.twig', [
            'controller_name' => 'FreeDrawController',
            'images' => $formatsData
        ]);

    }
}
