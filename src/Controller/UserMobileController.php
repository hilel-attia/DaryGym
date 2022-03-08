<?php

namespace App\Controller;

use App\Entity\User;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Validator\Constraints\Json;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


class UserMobileController extends AbstractController
{
    /******************Ajouter user*****************************************/
    /**
     * @Route("/addUser", name="add_user")
     */
    public function addUserAction(Request $request,NormalizerInterface $Normalizer)
    {
        $user = new User();
        $em = $this->getDoctrine()->getManager();

        $username = $request->query->get("username");
        $nomComplet = $request->query->get("nomComplet");
        $email = $request->query->get("email");
       
        $password = $request->query->get("password");
      

        $date = new \DateTime('now');

        $user->setUsername($username);
        $user->setNomComplet($nomComplet);
        
        $user->setEmail($email);
        $user->setPassword($password);
       
       

        $em->persist($user);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($user);
        return new JsonResponse($formatted);

    }

    /******************Supprimer user*****************************************/

    /**
     * @Route("/jsonUserDelete/{id}" , name="jsondelete")
     */
    public function deleteUserAction(Request $request, NormalizerInterface $Normalizer, $id) {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);
        if($user!=null ) {
            $em->remove($user);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("user a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id user invalide.");


    }

    /******************Modifier user*****************************************/
    /**
     * @Route("/jsonUserUpdate/{id}", name="jsonupdate" )
     */
    public function modifierUserAction(Request $request, NormalizerInterface $Normalizer, $id) {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getDoctrine()->getManager()
            ->getRepository(User::class)
            ->find($id);

        $nom = $request->query->get("username");
        $prenom = $request->query->get("nomComplet");
        $username = $request->query->get("email");
        $email = $request->query->get("password");
        
       

        $user->setUsername($username);
        $user->setNom($nomComplet);
        $user->setPrenom($email);
        $user->setEmail($password);
      


        $em->persist($user);
        $em->flush();
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsonContent));

    }




    /******************affichage user*****************************************/

    /**
     * @Route("/displayUsers", name="display_Users")
     */
    public function allUsers(NormalizerInterface $Normalizer)
    {
        {
            $repository=$this->getDoctrine()->getRepository(User::class);
            $users=$repository->findAll();
            $jsonContent=$Normalizer->normalize($users, 'json',['groups'=>'post:read']);
            return $this->render('user_mobile/index.html.twig',[
                'data'=> $jsonContent,
            ]);
    
    
        }

    }
    /******************Detail user*****************************************/

    /**
     * @Route("/jsonUserShow/{id}", name="jsonid" )
     */

    //Detail Reclamation
    public function detailUserAction(Request $request, $id, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups' => 'post:read']);

        return new Response(json_encode($jsonContent));
    }

        /******************Detail user*****************************************/

    /**
     * @Route("/jsonUserFind/{username}", name="jsonUserFind" )
     */

    //Detail Reclamation
    public function jsonUserFind(NormalizerInterface $Normalizer,$username,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($username);
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups' => 'post:read']);

        return new Response(json_encode($jsonContent));
    }
}