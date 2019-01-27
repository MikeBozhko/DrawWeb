<?php

namespace App\Controller;

use App\Entity\User;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserBundleControlController extends AbstractController
{
    /**
     * @Route("/user-control", name="user_control")
     * @throws \Exception
     */
    public function index()
    {
        $user = User::all();

        return $this->render('user_bundle_control/index.html.twig', [
            'controller_name' => 'UserBundleControlController',
            'name' => $name,

        ]);
    }
}
