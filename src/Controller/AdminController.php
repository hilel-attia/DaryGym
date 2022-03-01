<?php


namespace App\Controller;


use App\Repository\UserRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends AbstractController
{

    /**
     * @Route("/admin",name="app_admin_index")
     */
    public function index(){
        return $this->render("admin/main.html.twig");
    }




     
}
