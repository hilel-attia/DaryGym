<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Dompdf\Dompdf;
use Dompdf\Options;

/**
 * @Route("/reclamation")
 */
class ReclamationController extends AbstractController
{
    /**
     * @Route("/", name="reclamation_index", methods={"GET"})
     */
    public function index(Request $request ,ReclamationRepository $reclamationRepository): Response
    {
        
        
return $this->render('reclamation/index.html.twig', [
            'reclamation' => $reclamationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="reclamation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setStatut(0);
            $reclamation->setCreatedAt(new \Datetime('now'));
            $entityManager->persist($reclamation);
            $entityManager->flush();
            
         return  new Response(
            '<html><body><script>alert("sayee !")</script></body></html>'
        );
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reclamation_show", methods={"GET"})
     */
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', ['reclamation' => $reclamation]);
    }

    /**
     * @Route("/{id}/edit", name="reclamation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setStatut(0);
            $entityManager->flush();

            return $this->redirectToRoute('reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reclamation_delete", methods={"POST"})
     */
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reclamation_index', [], Response::HTTP_SEE_OTHER);
    }


    /**
 * @Route("/reclamation", name="reclamation_add")
 */
 //public function AjoutRec(Request $request)
//{
  //  $reclamation = new Reclamation();
    // $form = $this->createForm(ReclamationType::class, $reclamation);
    // $form->handleRequest($request);
    // if($form->isSubmitted()&& $form->isValid()){
       // $em = $this->getDoctrine()->getManager();
        // $em->persist($reclamation);
        // $em->flush();
        // return $this->redirectToRoute('reponse_index');
   // }
   // return $this->render("admin/reponse/index.html.twig",['form'=> $form->createView()]);

   // }

/**
     * @Route("/search/back", name="reclamationajax", methods={"GET"})
     */

    public function searchoffreajax(Request $request ,ReclamationRepository $reclamationRepository ) :Response
    {
        $reclamationRepository = $this->getDoctrine()->getRepository(Reclamation::class);
        $requestString=$request->get('searchValue');
        $reclamation = $reclamationRepository->findReclamationbytitle($requestString);
    
        return $this->render('reclamation/reclamationajax.html.twig', [
            "reclamation"=>$reclamation
        ]);
    }
    
    public function getRealEntities($entities){
    
        foreach ($entities as $entity){
            $realEntities[$entity->getId()] = $entity->getTitre();
        }
    
        return $realEntities;
    }

    /**
     * @Route("/fr/statistique", name="statistique")
     */
    public function statistique(ReclamationRepository $repository)
    {
        $reclamations = $repository->findall();
        $nbrelevve = $repository->countelevee();
        $nbrmoyenne = $repository->countmoyenne();
        $nbrfaible = $repository->countfaible();
        $reclaTypeNom = [];
        foreach( $reclamations as $c )
        {
            $reclaTypeNom [] = $c->getType();
        }
        return $this->render('reclamation/stat.html.twig',[
            'TypeNom'=>$reclaTypeNom,
            'nbrelevee'=>$nbrelevve,
            'nbrmoyenne'=>$nbrmoyenne,
            'nbrfaible'=>$nbrfaible
        ]);
    }

    /**
     * @Route("/fr/reclamationtriecroissant ", name="triecroissant")
     */

    public function trie_croissant(ReclamationRepository $repository)
    {
       $repository = $this->getDoctrine()->getRepository(Reclamation::class);
       $reclamationcroissant = $repository->triecroissant();
        return $this->render('reclamation/index.html.twig', [
            "reclamation"=>$reclamationcroissant
        ]);
    }

    /**
     * @Route("/fr/reclamationtriedecroissant ", name="triedecroissant")
     */

    public function trie_decroissant(ReclamationRepository $repository)
    {
        $repository = $this->getDoctrine()->getRepository(Reclamation::class);
        $reclamationdec = $repository->triedecroissant();
        return $this->render('reclamation/index.html.twig', [
            "reclamation"=>$reclamationdec
        ]);
    }
    
}


