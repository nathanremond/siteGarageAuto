<?php

namespace App\Controller;

use App\Entity\OpenHours;
use App\Form\OpenHoursType;
use App\Repository\OpenHoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/open/hours")
 */
class OpenHoursController extends AbstractController
{
    /**
     * @Route("/", name="app_open_hours_index", methods={"GET"})
     */
    public function index(OpenHoursRepository $openHoursRepository): Response
    {
        return $this->render('open_hours/index.html.twig', [
            'open_hours' => $openHoursRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_open_hours_new", methods={"GET", "POST"})
     */
    public function new(Request $request, OpenHoursRepository $openHoursRepository): Response
    {
        $openHour = new OpenHours();
        $form = $this->createForm(OpenHoursType::class, $openHour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $openHoursRepository->add($openHour, true);

            return $this->redirectToRoute('app_open_hours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('open_hours/new.html.twig', [
            'open_hour' => $openHour,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_open_hours_show", methods={"GET"})
     */
    public function show(OpenHours $openHour): Response
    {
        return $this->render('open_hours/show.html.twig', [
            'open_hour' => $openHour,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_open_hours_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, OpenHours $openHour, OpenHoursRepository $openHoursRepository): Response
    {
        $form = $this->createForm(OpenHoursType::class, $openHour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $openHoursRepository->add($openHour, true);

            return $this->redirectToRoute('app_open_hours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('open_hours/edit.html.twig', [
            'open_hour' => $openHour,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_open_hours_delete", methods={"POST"})
     */
    public function delete(Request $request, OpenHours $openHour, OpenHoursRepository $openHoursRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$openHour->getId(), $request->request->get('_token'))) {
            $openHoursRepository->remove($openHour, true);
        }

        return $this->redirectToRoute('app_open_hours_index', [], Response::HTTP_SEE_OTHER);
    }
}
