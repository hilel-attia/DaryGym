<?php

namespace App\Entity;

use App\Repository\ExercicecategorieRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ExercicecategorieRepository::class)
*/
class Exercicecategorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * * @Assert\Length(
     * * min = 5,
     * * max = 50,
     * * minMessage = "libelle du categorie doit comporter au moins {{ limit }} caractères",
     * * maxMessage = "libelle du categorie doit comporter au plus {{ limit }} caractères" * )
     * * @Assert\NotBlank( message="Ne doit pas être vide")
     */

    private $libelle;
    /**
     * @ORM\Column(type="string", length=5000)
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }
    public function getImage()
    {
        return $this->image;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
    public function __toString()
    {
        return $this->libelle;
    }
}
