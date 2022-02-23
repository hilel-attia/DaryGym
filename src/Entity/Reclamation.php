<?php

namespace App\Entity;
use App\Repository\ReponseRepository;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface; 

/**
 * @ORM\Entity(repositoryClass=ReclamationRepository::class)
 */
class Reclamation
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
    private $titre;

    /**
     * @ORM\OneToOne(targetEntity=Reponse::class, mappedBy="telephone",  cascade={"all"} ,orphanRemoval=true)
     */
    private $reponse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

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
        return   $this->description = $description;

       
    }

  
    
    public function gettitre(): ?string
    {
        return $this->titre;
    }

    public function settitre(?string $titre): string
    {
        return $this->titre = $titre;

    }






    public function getReponse(): ?Reponse
    {
        return $this->reponse;
    }

    public function setReponse(?Reponse $reponse): self
    {
        // unset the owning side of the relation if necessary
        if ($reponse === null && $this->reponse !== null) {
            $this->reponse->setTelephone(null);
        }

        // set the owning side of the relation if necessary
        if ($reponse !== null && $reponse->getTelephone() !== $this) {
            $reponse->setTelephone($this);
        }

        $this->reponse = $reponse;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): string
    {
        return $this->nom = $nom;

    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): string
    {
        return  $this->prenom = $prenom;

    }

    
}
