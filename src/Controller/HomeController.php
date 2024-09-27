<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ServiceRepository;
use App\Repository\CarRepository;
use App\Repository\NoticeRepository;
use App\Repository\OpenHoursRepository;



class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(ServiceRepository $ServiceRepository, CarRepository $CarRepository, NoticeRepository $NoticeRepository, OpenHoursRepository $OpenHoursRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'services' => $ServiceRepository->findAll(),
            'cars' => $CarRepository->findAll(),
            'notices' => $NoticeRepository->findAll(),
            'openHours' => $OpenHoursRepository->findAll()
        ]);
    }
}
