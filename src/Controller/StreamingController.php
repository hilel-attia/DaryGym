<?php

namespace App\Controller;

use App\Entity\Streaming;
use App\Form\Streaming1Type;
use App\Repository\StreamingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/streaming")
 */
class StreamingController extends AbstractController
{
    /**
     * @Route("/", name="app_streaming_index", methods={"GET"})
     */
    public function index(StreamingRepository $streamingRepository): Response
    {
        return $this->render('streaming/index.html.twig', [
            'streamings' => $streamingRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_streaming_new", methods={"GET", "POST"})
     */
    public function new(Request $request, StreamingRepository $streamingRepository): Response
    {
        $streaming = new Streaming();
        $form = $this->createForm(Streaming1Type::class, $streaming);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $streamingRepository->add($streaming);
            return $this->redirectToRoute('app_streaming_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('streaming/new.html.twig', [
            'streaming' => $streaming,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_streaming_show", methods={"GET"})
     */
    public function show(Streaming $streaming): Response
    {
        return $this->render('streaming/show.html.twig', [
            'streaming' => $streaming,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_streaming_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Streaming $streaming, StreamingRepository $streamingRepository): Response
    {
        $form = $this->createForm(Streaming1Type::class, $streaming);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $streamingRepository->add($streaming);
            return $this->redirectToRoute('app_streaming_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('streaming/edit.html.twig', [
            'streaming' => $streaming,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_streaming_delete", methods={"POST"})
     */
    public function delete(Request $request, Streaming $streaming, StreamingRepository $streamingRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$streaming->getId(), $request->request->get('_token'))) {
            $streamingRepository->remove($streaming);
        }

        return $this->redirectToRoute('app_streaming_index', [], Response::HTTP_SEE_OTHER);
    }
}
