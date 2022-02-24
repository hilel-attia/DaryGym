<?php

namespace App\Entity;

use App\Repository\ExerciceRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=ExerciceRepository::class)
 */
class Exercice
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=5000)
     * @Assert\File(maxSize="500k",mimeTypes={"image/jpeg","image/png","image/GIF"})
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     * * min = 5,
     * * max = 50,
     * * minMessage = "le nom doit comporter au moins {{ limit }} caractères",
     * * maxMessage = "le nom doit comporter au plus {{ limit }} caractères" * )
     * * @Assert\NotBlank( message="Ne doit pas être vide")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * * @Assert\Length(
     * * min = 20,
     * * max = 500,
     * * minMessage = "la description doit comporter au moins {{ limit }} caractères",
     * * maxMessage = "la description doit comporter au plus {{ limit }} caractères" * )
     * * @Assert\NotBlank( message="Ne doit pas être vide")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=50000, nullable=true)
     */
    private $video;

    /**
     * @ORM\Column(type="string", length=50000, nullable=true)
     */
    private $docs;

    /**
     * @ORM\ManyToOne(targetEntity=Exercicecategorie::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Exercicecategorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImage()
    {
        return $this->image;

    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getVideo()
    {
        return $this->video;
    }

    public function setVideo( $video)
    {
        $this->video = $video;

        return $this;
    }

    public function getDocs()
    {
        return $this->docs;
    }

    public function setDocs( $docs)
    {
        $this->docs = $docs;

        return $this;
    }

    public function getExercicecategorie(): ?Exercicecategorie
    {
        return  $this->Exercicecategorie;
    }

    public function setExercicecategorie(?Exercicecategorie $Exercicecategorie): self
    {
        $this->Exercicecategorie = $Exercicecategorie;

        return $this;
    }

}
