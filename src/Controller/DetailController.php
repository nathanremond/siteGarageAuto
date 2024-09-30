<?php

namespace App\Controller;

use App\Repository\CarRepository;
use App\Repository\PhotoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailController extends AbstractController
{
    /**
     * @Route("/detail/{id}", name="app_detail")
     */
    public function index($id, CarRepository $CarRepository, PhotoRepository $photoRepository): Response
    {
        $car = $CarRepository->find($id);
        return $this->render('detail/index.html.twig', [
            'controller_name' => 'DetailController',
            'car' => $car,
            'photos' => $photoRepository->findBy(
                ['car' => $car]
            )
        ]);
    }
}
