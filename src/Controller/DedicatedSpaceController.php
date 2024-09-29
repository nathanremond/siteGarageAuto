<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class DedicatedSpaceController extends AbstractController
{
    /**
     * @Route("/dedicatedspace", name="app_dedicated_space")
     */
    public function index(Request $request): Response
    {
        $session = $request->getSession();
        return $this->render('dedicated_space/index.html.twig', [
            'user' => $session->get('user'),
        ]);
    }
}
