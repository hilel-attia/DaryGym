<?php

namespace App\Controller;

use App\Entity\Offres;
use App\Form\OffresType;
use App\Repository\OffresRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class OffresController extends AbstractController
{
    /**
     * @Route("/", name="offres_index", methods={"GET"})
     */
    public function index(OffresRepository $offresRepository): Response
    {
        return $this->render('admin/offres/index.html.twig', [
            'offres' => $offresRepository->findAll(),
        ]);
    }


/**
     * @Route("/listoff", name="offres", methods={"GET"})
     */
      public function home(OffresRepository $offresRepository): Response
    {
        return $this->render('front/offre/offre.html.twig', [
            'offres' => $offresRepository->findAll(),
        ]);
    }


    /**
     * @Route("/new", name="offres_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $offre = new Offres();
        $form = $this->createForm(OffresType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file=$offre->getImage();


$filename = $this->generateUniqueFileName().'.'.$file->guessExtension();

$file->move($this->getParameter('photos_directory'),$filename);

$offre->setImage($filename);
            $entityManager->persist($offre);
            $entityManager->flush();

            return $this->redirectToRoute('offres_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/offres/new.html.twig', [
            'offre' => $offre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="offres_show", methods={"GET"})
     */
    public function show(Offres $offre): Response
    {
        return $this->render('admin/offres/show.html.twig', [
            'offre' => $offre,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="offres_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Offres $offre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OffresType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file=$offre->getImage();


$filename = $this->generateUniqueFileName().'.'.$file->guessExtension();

$file->move($this->getParameter('photos_directory'),$filename);

$offre->setImage($filename);
            $entityManager->flush();

            return $this->redirectToRoute('offres_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/offres/edit.html.twig', [
            'offre' => $offre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="offres_delete", methods={"POST"})
     */
    public function delete(Request $request, Offres $offre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offre->getId(), $request->request->get('_token'))) {
            $entityManager->remove($offre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('offres_index', [], Response::HTTP_SEE_OTHER);
    }
    private function generateUniqueFileName()
{
    // md5() reduces the similarity of the file names generated by
    // uniqid(), which is based on timestamps
    return md5(uniqid());
}
}
