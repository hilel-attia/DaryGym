<?php


namespace App\Entity;

use App\Repository\SeanceRepository;
use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * @ORM\Entity(repositoryClass=SeanceRepository::class)
 */
class Seance
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /** * @ORM\Column(type="string", length=255) * @Assert\Length(
     * * min = 5,
     * * max = 50,
     * * minMessage = "le titre du seance doit comporter au moins {{ limit }} caractères",
     * * maxMessage = "le titre du seance doit comporter au plus {{ limit }} caractères" * )
     * * @Assert\NotBlank( message="Ne doit pas être vide")
     */

    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length( * min = 10, * max = 50,
     * minMessage = "la description doit comporter au moins {{ limit }} caractères",
     * maxMessage = "la description  doit comporter au plus {{ limit }} caractères" * )
     * @Assert\NotBlank( message="Ne doit pas être vide")

     */
    private $description;

    /**
     * @ORM\Column(type="date")
     */
    private $date_seance;

    /**
     * @ORM\Column(type="time")
     */
    private $debut;

    /**
     * @ORM\Column(type="time")
     */
    private $fin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $link;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

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

    public function getDateSeance(): ?\DateTimeInterface
    {
        return $this->date_seance;
    }

    public function setDateSeance(\DateTimeInterface $date_seance): self
    {
        $this->date_seance = $date_seance;

        return $this;
    }

    public function getDebut(): ?\DateTimeInterface
    {
        return $this->debut;
    }

    public function setDebut(\DateTimeInterface $debut): self
    {
        $this->debut = $debut;

        return $this;
    }

    public function getFin(): ?\DateTimeInterface
    {
        return $this->fin;
    }

    public function setFin(\DateTimeInterface $fin): self
    {
        $this->fin = $fin;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }
}
