<?php


namespace App\Controller;


use App\Entity\Role;
use App\Entity\User;
use App\Form\UserFormType;
use App\Entity\PropertySearch;
use App\Form\ChangePwsdFormType;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Form\PropertySearchType;
use App\Repository\RoleRepository;
use App\Repository\UserRepository;
use App\Repository\OffresRepository;
use App\Repository\AbonnementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends BaseController
{
    private $userRepository;
    private $passwordEncoder;

    private $entityManager;
    private $roleRepository;

    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager)
    {
        $this->userRepository = $userRepository;
        $this->passwordEncoder = $passwordEncoder;
        $this->entityManager = $entityManager;
        $this->roleRepository = $roleRepository;
    }

    public function fakepswd(Request $request)
    {
        $this->denyAccessUnlessGranted("ROLE_ADMIN");
        $user = new User();
        $user->setValid(true)
            ->setDeleted(false)
            ->setEmail("mam@ddd.com")
            ->setNomComplet("nom comp")
            ->setUsername("mamless")
            ->setRoles(["ROLE_ADMIN"])
            ->setPassword($this->passwordEncoder->encodePassword($user, $request->get("password")));
        // $user = $this->userRepository->saveUser($user);
        return $this->json(["id" => $user->getId(), "password" => $user->getPassword(), "decode" => $this->passwordEncoder->isPasswordValid($user, 1)]);
    }

    /**
     * @Route("/admin/user",name="app_admin_users")
     * @IsGranted("ROLE_SUPERUSER")
     */
    public function index()
    {
        
        $users = $this->userRepository->findAll();
        return $this->render("admin/user/user.html.twig", ["users" => $users]);
    }

    public function excel()
    {
       // In your controller
$newSpreadsheet = $this->get('phpoffice.spreadsheet')->createSpreadsheet();
$existingXlsx   = $this->get('phpoffice.spreadsheet')->createSpreadsheet('/path/to/file.xlsx');
    }
     /**
     * @Route("/admin/user",name="app_admin_users")
     * @IsGranted("ROLE_SUPERUSER")
     */
    public function search(Request $request,PaginatorInterface $paginator)
    {
    $propertySearch = new PropertySearch();
    $form = $this->createForm(PropertySearchType::class,$propertySearch);
    $form->handleRequest($request);
    //initialement le tableau des users est vide,
    //c.a.d on affiche les articles que lorsque l'utilisateur
    //clique sur le bouton rechercher
    $data = $form->getData();
    $users= $this->getDoctrine()->getRepository(User::class)->findAll();

    $users = $paginator->paginate(
        $users, // Requête contenant les données à paginer (ici nos articles)
        $request->query->getInt('page', 1),
        3 // Nombre de résultats par page
        );
    
    if($form->isSubmitted() && $form->isValid()) {
          
    //on récupère le nom d'article tapé dans le formulaire
    $nomComplet = $propertySearch->getNomComplet();
 if ($nomComplet!="")
 //si on a fourni un nom d'article on affiche tous les articles ayant ce nom
 $users= $this->getDoctrine()->getRepository(User::class)->findBy(['nomComplet' => $nomComplet] );
 else
 //si si aucun nom n'est fourni on affiche tous les articles
 $users= $this->getDoctrine()->getRepository(User::class)->findAll();
 }
 return $this->render('admin/user/user.html.twig',[ 'form' =>$form->createView(),'users' => $users]);
 }



/**
     * @Route("/admin/stat", name="app_admin_stat")
     */
    public function statistiques(UserRepository $userRepository,OffresRepository $offresRepository,AbonnementRepository $abonnementRepository ){
      
        //     // On va chercher toutes les catégories
        // 
        $users = $this->userRepository->findAll();
           $categNom = [];
        //     $categColor = [];
             $categCount = [];
             $deletedCount= [];
        $offres = $offresRepository->findAll();

             $titre = [];
             $prix = [];



             $abonnement = $abonnementRepository->findAll();
             $abonCount=[];

            //  foreach($abons as $abon){
            //  $abonCount[] = count($abonnement->getOffre()); 
            //  }
        //     // On "démonte" les données pour les séparer tel qu'attendu par ChartJS
            foreach($users as $user){
                $categNom[] = $user->getUsername();
                // $categColor[] = $categorie->getColor();
               // $categCount[] = $user->getRoles();
                 $categCount[] = $user->isvalid();
                 $deletedCount[] = $user->isDeleted();
                 //$em =$this->getDoctrine()->getEntityManager();
              //$categCount[] = $createQuery('SELECT COUNT(valid) FROM USER where valid=0');
            //    $em =$this->getDoctrine()->getEntityManager();
            //    $query = $em->createQuery('SELECT COUNT(valid) FROM USER where valid=0');
            //    $resultat = $query ->getResult();
            //    $categCount[] = $resultat;
               

           }
           foreach($offres as $offre){
            $titre[] = $offre->getTitre();
           // $categColor[] = $categorie->getColor();
           $prix[] = $offre->getPrix();
        }
        
            return $this->render("admin/stat.html.twig", [
                'categNom' => json_encode($categNom),
                
                'categCount' => json_encode($categCount),
                'deletedCount' => json_encode($deletedCount),
                'titre' => json_encode($titre),
                'abonCount' => json_encode($abonCount),
            'prix' => json_encode($prix)
            ]);
       
        
        }










    /**
     * @Route("/admin/user/new",name="app_admin_new_user")
     * @IsGranted("ROLE_SUPERUSER")
     */
    public function newUser(Request $request, TranslatorInterface $translator)
    {
        $form = $this->createForm(UserFormType::class, null, ["translator" => $translator]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var  User $user */
            $user = $form->getData();
            /** @var Role $role */
            $password = $form["justpassword"]->getData();
            $role = $form["role"]->getData();
            $user->setValid(true)
                ->setDeleted(false)
                ->setAdmin(true)
                ->setPassword($this->passwordEncoder->encodePassword($user, $password))
                ->setRoles([$role->getRoleName()]);
            $this->entityManager->persist($user);
            $this->entityManager->flush();
            $this->addFlash("success", $translator->trans('backend.user.add_user'));
            return $this->redirectToRoute("app_admin_users");
        }
        return $this->render("admin/user/userform.html.twig", ["userForm" => $form->createView()]);
    }

    /**
     * @Route("/admin/user/edit/{id}",name="app_admin_edit_user")
     * @IsGranted("ROLE_SUPERUSER")
     */
    public function editUser(User $user, Request $request, TranslatorInterface $translator)
    {
        $form = $this->createForm(UserFormType::class, $user, ["translator" => $translator]);
        $form->get('justpassword')->setData($user->getPassword());
        $therole = $this->roleRepository->findOneBy(["roleName" => $user->getRoles()[0]]);
        $form->get('role')->setData($therole);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Role $role */
            $role = $form["role"]->getData();
            $password = $form["justpassword"]->getData();
            $user->setRoles([$role->getRoleName()]);
            if ($user->getPassword() != $password) {
                $user->setPassword($this->passwordEncoder->encodePassword($user, $password));
            }
            $this->entityManager->persist($user);
            $this->entityManager->flush();
            $this->addFlash("success", $translator->trans('backend.user.modify_user'));
            return $this->redirectToRoute("app_admin_users");
        }
        return $this->render("admin/user/userform.html.twig", ["userForm" => $form->createView()]);
    }

    /**
     * @Route("/admin/user/changevalidite/{id}",name="app_admin_changevalidite_user",methods={"post"})
     * @IsGranted("ROLE_SUPERUSER")
     */
    public function activate(User $user)
    {
        $user = $this->userRepository->changeValidite($user);
        return $this->json(["message" => "success", "value" => $user->isValid()]);
    }

    /**
     * @Route("/admin/user/delete/{id}",name="app_admin_delete_user")
     * @IsGranted("ROLE_SUPERUSER")
     */
    public function delete(User $user)
    {
        $user = $this->userRepository->delete($user);
        /*$this->addFlash("success","Utilisateur supprimé");
        return $this->redirectToRoute('app_admin_users');*/
        return $this->json(["message" => "success", "value" => $user->isDeleted()]);
    }

    /**
     * @Route("/admin/user/changePassword",name="app_admin_changepswd")
     * @IsGranted("ROLE_SUPERUSER")
     */
    public function changePswd(Request $request, TranslatorInterface $translator)
    {
        $user = $this->getUser();
        $form = $this->createForm(ChangePwsdFormType::class, $user, ["translator" => $translator]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $password =  $form["justpassword"]->getData();
            $newPassword = $form["newpassword"]->getData();

            if ($this->passwordEncoder->isPasswordValid($user, $password)) {
                $user->setPassword($this->passwordEncoder->encodePassword($user, $newPassword));
            } else {
                $this->addFlash("error", $translator->trans('backend.user.new_passwod_must_be'));
                return $this->render("admin/params/changeMdpForm.html.twig", ["passwordForm" => $form->createView()]);
            }

            $this->entityManager->persist($user);
            $this->entityManager->flush();
            $this->addFlash("success", $translator->trans('backend.user.changed_password'));
            return $this->redirectToRoute("app_admin_index");
        }
        return $this->render("admin/params/changeMdpForm.html.twig", ["passwordForm" => $form->createView()]);
    }

    /**
     * @Route("/admin/user/groupaction",name="app_admin_groupaction_user")
     * @IsGranted("ROLE_SUPERUSER")
     */
    public function groupAction(Request $request, TranslatorInterface $translator)
    {
        $action = $request->get("action");
        $ids = $request->get("ids");
        $users = $this->userRepository->findBy(["id" => $ids]);

        if ($action == $translator->trans('backend.user.deactivate')) {
            foreach ($users as $user) {
                $user->setValid(false);
                $this->entityManager->persist($user);
            }
        } else if ($action == $translator->trans('backend.user.Activate')) {
            foreach ($users as $user) {
                $user->setValid(true);
                $this->entityManager->persist($user);
            }
        } else if ($action == $translator->trans('backend.user.delete')) {
            foreach ($users as $user) {
                $user->setDeleted(true);
                $this->entityManager->persist($user);
            }
        } else {
            return $this->json(["message" => "error"]);
        }
        $this->entityManager->flush();
        return $this->json(["message" => "success", "nb" => count($users)]);
    }
}
