<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class PersonalTemplatesController extends Controller
{
    /**
     * @Route("/personal-templates", name="personal_templates")
     */
    public function index()
    {
        return $this->render('personal_templates/index.html.twig', [
            'controller_name' => 'PersonalTemplatesController',
        ]);
    }
}
