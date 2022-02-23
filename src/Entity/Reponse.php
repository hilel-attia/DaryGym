<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
    private $date_reponse;

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



    public function getdate_reponse():?String 
    {
        return $this->date_reponse;
    }

    public function setdate_reponse($date_reponse)
    {
        return $this->date_reponse = $date_reponse;

        
    }
    /**
     * @ORM\OneToOne(targetEntity=Reclamation::class, inversedBy="reponse", cascade={"all"} ,orphanRemoval=true)
     */
    private $telephone;

    public function getTelephone(): ?Reclamation
    {
        return $this->telephone;
    }

    public function setTelephone(?Reclamation $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

   

   
}
