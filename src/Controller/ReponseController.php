<?php

namespace App\Controller;
use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Entity\Reclamation;
use Swift_Mailer;
use App\Repository\ReponseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormTypeInterface;

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
     * @Route("/{id}/saveReponse", name="Reponse_Add")
     */
     function saveReponse(Request $request, EntityManagerInterface $entityManager,Reclamation $reclamation): Response
    {
        $reclamation = $this->getDoctrine()
            ->getRepository(Reclamation::class)->find('id') ;
   

        //$reponse = new Reponse();
        //$reponse->setdate_reponse(new \DateTime());          
       // $reponse->setTelephone($reclamation);
        // $reponse->setdescription("tese");

    // $em = $this->getDoctrine()->getManager();
        //$em->persist($reponse);
        //$em->flush();
    

        return $this->render('reponse/new.html.twig');
    }
  
    /**
 * @Route("/addreclamation", name="ajouter-rep")
 */
 // public function AjoutRep(Request $request)
//{
  //  $reponse = new Reponse();
    // $form = $this->createForm(ReponseType::class, $reponse);
    //$form->handleRequest($request);
    //if($form->isSubmitted()&& $form->isValid()){
      //  $em = $this->getDoctrine()->getManager();
        //$em->persist($reponse);
        //$em->flush();
         //return $this->redirectToRoute('reponse_index');
    //}
    //return $this->render("admin/reponse/index.html.twig",['form'=> $form->createView()]);
    //}



   /**
     * @Route("/new/{id}", name="reponse_new")
     */
    public function Reponse(Request $request ,\Swift_Mailer $mailer , Reclamation $reclamation)
    {
        $reponse = new Reponse();
        $form = $this->createForm(ReponseType::class, $reponse);

        $form->handleRequest($request);
        
        if($form->isSubmitted()&& $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $reponse->setDateDebut(new \Datetime('now'));
            $reclamation->setStatut(1);
            $reponse->setDateFin(new \Datetime('now'));
            $em->persist($reponse);
            $em->flush();
            $message = (new \Swift_Message('Bienvenu'))
                ->setFrom('fathallah.meriem@esprit.tn')
                ->setTo($reponse->getemail())
                ->setBody('bienvenu votre réservation a était enregistrer')
            ;
            $mailer->send($message);
            $this->addFlash('success',"L'action a ete effectué");
            return $this->redirectToRoute('reponse_index');
        }
        return $this->render("reponse/newReponse.html.twig",['form'=> $form->createView()]);
    }

    /**
     * @Route("/fr/Reponse/calendrier", name="calendrier")
     */
    public function calendrier_offre(ReponseRepository $repository)
    {
        $reponses=$repository->findAll();

        $rdvs = [];

        foreach ($reponses as $event)
        {
          $rdvs[]=[
              'title'=>$event->getDescription(),
              'start'=>$event->getDateDebut()->format("Y-m-d"),
              'end'=>$event->getDateFin()->format("Y-m-d"),
              'backgroundColor'=> 'aquamarine',
              'borderColor'=> 'green',
              'textColor' => 'black'
                  ];
        }
        $data = json_encode($rdvs);
        return $this->render('reponse/calendrier.html.twig',compact('data'));
    }
}
        