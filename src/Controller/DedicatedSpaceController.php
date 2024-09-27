<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DedicatedSpaceController extends AbstractController
{
    /**
     * @Route("/dedicatedspace", name="app_dedicated_space")
     */
    public function index(): Response
    {
        return $this->render('dedicated_space/index.html.twig', [
            'controller_name' => 'DedicatedSpaceController',
        ]);
    }
}
