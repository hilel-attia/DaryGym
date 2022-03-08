<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Form\FormTypeInterface; 



/**
 * @ORM\Entity(repositoryClass=ReponseRepository::class)
 */
class Reponse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    
    /**
     * @ORM\ManyToOne(targetEntity=Reclamation::class, inversedBy="reponses")
     */
    private $reclamation;

    /**
    * @ORM\Column(type="datetime")
    */
    private $datedebut;

    /**
    * @ORM\Column(type="datetime")
    */
    private $datefin;


    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDateDebut(\DateTimeInterface $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDateFin(\DateTimeInterface $datefin): self
    {
        $this->datefin = $datefin;

        return $this;
    }

    



    public function getId(): ?int
    {
        return $this->id;
    }
  

    public function getdescription(): ?string
    {
        return $this->description;
    }

    public function setdescription(?string $description): string
    {
        return $this->description = $description;

    }








    public function getemail(): ?string
    {
        return $this->email;
    }

    public function setemail(?string $email): string
    {
        return $this->email = $email;

    }





    

    public function getReclamation(): ?Reclamation
    {
        return $this->reclamation;
    }

    public function setReclamation(?Reclamation $reclamation): self
    {
        $this->reclamation = $reclamation;

        return $this;
    }
   
}
