<?php

namespace App\Entity;

use App\Repository\ExerciceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * @ORM\Entity(repositoryClass=ExerciceRepository::class)
 *  @ApiResource(
 *     collectionOperations={},
 *     itemOperations={
 *     "get"={"controller"=App\Controller\Api\EmptyController::class,
 *     "read"=false,
 *     "deserialize"=false
 *     }}
 * )

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
     * @Groups({"read:full:comment"})
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

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="exercice", orphanRemoval=true)
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="exercice", orphanRemoval=true)
     */
    private $exercice;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->exercice = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Comment>
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setExercice($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getExercice() === $this) {
                $comment->setExercice(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->nom;
    }

    /**
     * @return Collection<int, Comment>
     */
    public function getExercice(): Collection
    {
        return $this->exercice;
    }

    public function addExercice(Comment $exercice): self
    {
        if (!$this->exercice->contains($exercice)) {
            $this->exercice[] = $exercice;
            $exercice->setExercice($this);
        }

        return $this;
    }

    public function removeExercice(Comment $exercice): self
    {
        if ($this->exercice->removeElement($exercice)) {
            // set the owning side to null (unless already changed)
            if ($exercice->getExercice() === $this) {
                $exercice->setExercice(null);
            }
        }

        return $this;
    }



}
