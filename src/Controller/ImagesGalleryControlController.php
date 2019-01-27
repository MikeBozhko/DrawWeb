<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ImagesGalleryControlController extends AbstractController
{
    /**
     * @Route("/images-control", name="images_gallery_control")
     */
    public function index()
    {
        return $this->render('images_gallery_control/index.html.twig', [
            'controller_name' => 'ImagesGalleryControlController',
        ]);
    }
}
