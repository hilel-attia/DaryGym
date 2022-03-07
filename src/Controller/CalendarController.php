<?php

namespace App\Controller;

use App\Entity\Calendar;
use App\Form\CalendarType;
use App\Repository\CalendarRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/calendar")
 */
class CalendarController extends AbstractController
{
    /**
     * @Route("/", name="calendar_index", methods={"GET"})
     */
    public function index(CalendarRepository $calendarRepository): Response
    {
        return $this->render('calendar/index.html.twig', [
            'calendars' => $calendarRepository->findAll(),
        ]);
        
    }

    /**
     * @Route("/new", name="calendar_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $calendar = new Calendar();
        $form = $this->createForm(CalendarType::class, $calendar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($calendar);
            $entityManager->flush();

            return $this->redirectToRoute('calendar_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('calendar/new.html.twig', [
            'calendar' => $calendar,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="calendar_show", methods={"GET"})
     */
    public function show(Calendar $calendar): Response
    {
        return $this->render('calendar/show.html.twig', [
            'calendar' => $calendar,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="calendar_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Calendar $calendar, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CalendarType::class, $calendar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('calendar_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('calendar/edit.html.twig', [
            'calendar' => $calendar,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="calendar_delete", methods={"POST"})
     */
    public function delete(Request $request, Calendar $calendar, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$calendar->getId(), $request->request->get('_token'))) {
            $entityManager->remove($calendar);
            $entityManager->flush();
        }

        return $this->redirectToRoute('calendar_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/front/", name="index", methods={"GET"})
     */
    public function afficher(CalendarRepository $calendarRepository): Response
    {
        return $this->render('front/index.html.twig', [
            'calendars' => $calendarRepository->findAll(),
        ]);

    }
    /**
     * @Route("/front/mobile", name="mobile")
     */
    public function affichermobile(NormalizerInterface $Normalizer)
    {
        $repository=$this->getDoctrine()->getRepository(Calendar::class);
        $calendars=$repository->findAll();
        $jsonContent=$Normalizer->normalize($calendars, 'json',['groups'=>'post:read']);
        return $this->render('front/mobile.html.twig',[
            'data'=> $jsonContent,
        ]);


    }
    /**
     * @Route("/front/mobile/{id}", name="mobile")
     */
    public function calendarid(Request $request ,$id,NormalizerInterface $Normalizer){
        $em=$this->getDoctrine()->getManager();
        $calendar=$em->getRepository(Calendar::class)->find($id);
        $jsonContent=$Normalizer->normalize($calendar, 'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));




    }

  /*  /**
     * @Route(/front/mobile/new", name="addmobile" )
     */
  /*public function addmobile(Request $request,NormalizerInterface $Normalizer) :Response
    {
        $em = $this->getDoctrine()->getManager();
        $calendar=new calendar();
        $calendar->setTitle($request->get('title'));
        $calendar->setStart($request->get('start'));
        $calendar->setEnd($request->get('end'));
        $calendar->setDescription($request->get('description'));
        $calendar->setAllDay($request->get('all_day'));
        $calendar->setBackgroundColor($request->get('background_color'));
        $calendar->setBorderColor($request->get('border_color'));
        $calendar->setTextColor($request->get('text_color'));
        $em->persist($calendar);
        $em->flush();
        $jsonContent = $Normalizer->normalize($calendar, 'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));


    }*/
    /**
     * @Route("/front/mobile/delete/{id}", name="mobile")
     */
    public function deletecalendar(Request $request ,$id,NormalizerInterface $Normalizer)
    {

        $em=$this->getDoctrine()->getManager();
        $calendar=$em->getRepository(Calendar::class)->find($id);
        $em->remove($calendar);
        $em->flush();
        $jsonContent=$Normalizer->normalize($calendar, 'json',['groups'=>'post:read']);
        return new Response("calendar deleted successfully".json_encode($jsonContent));


    }

}



