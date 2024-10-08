<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="app_login", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    /**
     * @Route("/signin", name="app_signin", methods={"POST"})
     */
    public function signin(Request $request, UserRepository $userRepository): Response
    {
        $email = $request->get('email');
        $password = $request->get('password');

        $users = $userRepository->findBy(
            ['email' => $email,
            'password' => $password]
        );
        if(count($users) == 1) {
            $session = $request->getSession();
            $session->set('user', $users[0]);
            return $this->render('dedicated_space/index.html.twig', [
                'user' => $session->get('user'),
            ]);
        }
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}