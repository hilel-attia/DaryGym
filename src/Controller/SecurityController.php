<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use App\Entity\User;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/admin/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(){

    }
    
   /**
     * @Route("/admin/inscription", name="app_inscription")
     */
    public function registration(Request $request, EntityManagerInterface  $em, 
        UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form  = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
  
        if($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($user,$user->getPassword());
            $user->setPassword($hash);
        //l'objet $em sera affecté automatiquement grâce à l'injection des dépendances de symfony 4  
           $em->persist($user);
           $em->flush();  
           return $this->redirectToRoute('security_login');
        }
       return $this->render('security/registration.html.twig', 
                           ['form' =>$form->createView()]);
    }
}