<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use http\Client\Curl\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/comment")
 */
class CommentController extends AbstractController
{
    /**
     * @Route("/", name="app_comment_index", methods={"GET"})
     */
    public function index(CommentRepository $commentRepository): Response
    {
        return $this->render('comment/index.html.twig', [
            'comments' => $commentRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_comment_new", methods={"GET", "POST"})
     */
    public function new(Request $request, CommentRepository $commentRepository): Response
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);





        if ($form->isSubmitted() && $form->isValid() )  {

            $commentRepository->add($comment);
            return $this->redirectToRoute('app_comment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('/exercice/index.html.twig', [
            'comment' => $comment,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_comment_show", methods={"GET"})
     */
    public function show(Comment $comment): Response
    {
        return $this->render('comment/show.html.twig', [
            'comment' => $comment,
        ]);
    }

    /**
     * @Route("/front/enligne/{id}/edit", name="app_comment_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Comment $comment, CommentRepository $commentRepository): Response
    {
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid() ) {
            if ( $this->container->get('security.token_storage')->getToken()->getUser()===$comment->getUser()){
            $commentRepository->add($comment);

        }
            return $this->redirectToRoute('exercice_show', ['id'=>$comment->getExercice()->getId()], Response::HTTP_SEE_OTHER);
        }


        return $this->render('front/edit.html.twig', [
            'comment' => $comment,

            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_comment_delete", methods={"POST"})
     */
    public function delete(Request $request, Comment $comment, CommentRepository $commentRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$comment->getId(), $request->request->get('_token'))) {
            if ( $this->container->get('security.token_storage')->getToken()->getUser()===$comment->getUser()){
            $commentRepository->remove($comment);
        } }

        return $this->redirectToRoute('exercice_show', ['id'=>$comment->getExercice()->getId()], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/delete/{id}", name="comment_delete", methods={"POST"})
     */
    public function deletebyadmin(Request $request, Comment $comment, CommentRepository $commentRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$comment->getId(), $request->request->get('_token'))) {

                $commentRepository->remove($comment);
            }

        return $this->redirectToRoute('app_comment_index', [], Response::HTTP_SEE_OTHER);
    }
}