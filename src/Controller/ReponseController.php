<?php

namespace App\Controller;
use App\Entity\Reponse;
use App\Entity\Reclamation;
use App\Repository\ReponseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;


/**
 * @Route("/reponse")
 */

class ReponseController extends AbstractController
{
    /**
     * @Route("/", name="reponse_index", methods={"GET"})
     */
    public function index(ReponseRepository $reponseRepository): Response
    {
        
        return $this->render('reponse/index.html.twig', [
            'reponse' => $reponseRepository->findAll(),
        ]);
    }


    /**
     * @param $id
     * @param reponseRepository $rep
     * @Route ("/Delete/{id}", name="delete")
     */
    function Delete($id,reponseRepository $rep){
        $reponse=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($reponse);
        $em->flush();
        return $this->redirectToRoute('reponse_index');

    }
    

    /**
     * @Route("/saveReponse", name="Reponse_Add")
     */
     function saveReponse(Request $request, EntityManagerInterface $entityManager): Response
    {
       // $reclamation = $this->getDoctrine()->getManager()
       // ->getRepository(Reclamation::class)
       // ->find($request->get('reponse'));

        $reponse = new Reponse();
        $reponse->setdate_reponse(new \DateTime());          
       // $reponse->setTelephone($reclamation);
        // $reponse->setdescription("tese");

        $em = $this->getDoctrine()->getManager();
        $em->persist($reponse);
        $em->flush();
    

        return $this->render('reponse/new.html.twig', [
            'reponse' => $reponse
            
        ]);
    }
  

}