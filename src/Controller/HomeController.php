<?php

namespace App\Controller;

use App\Entity\Notice;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ServiceRepository;
use App\Repository\CarRepository;
use App\Repository\NoticeRepository;
use App\Repository\OpenHoursRepository;
use Symfony\Component\HttpFoundation\Request;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(ServiceRepository $serviceRepository, CarRepository $carRepository, NoticeRepository $noticeRepository, OpenHoursRepository $openHoursRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'services' => $serviceRepository->findAll(),
            'cars' => $carRepository->findAll(),
            'notices' => $noticeRepository->findby(
                ['state'=>'validated']
            ),
            'openHours' => $openHoursRepository->findAll()
        ]);
    }

    /**
     * @Route("/createNotice", name="app_create_notice",  methods={"POST"})
     */
    public function createNotice(Request $request, ServiceRepository $serviceRepository, CarRepository $carRepository, NoticeRepository $noticeRepository, OpenHoursRepository $openHoursRepository): Response
    {
        $notice = new Notice();

        $notice->setName($request->get('name'));
        $notice->setComment($request->get('comment'));
        $notice->setNote($request->get('note'));
        $notice->setState('new');

        $noticeRepository->add($notice, true);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'services' => $serviceRepository->findAll(),
            'cars' => $carRepository->findAll(),
            'notices' => $noticeRepository->findby(
                ['state'=>'validated']
            ),
            'openHours' => $openHoursRepository->findAll()
        ]);
    }
}
