<?php

namespace App\Entity;

use App\Repository\CalendarRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CalendarRepository::class)
 */
class Calendar
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\Length(
     * * min = 5,
     * * max = 50,
     * * minMessage = "le titre du seance doit comporter au moins {{ limit }} caractères",
     * * maxMessage = "le titre du seance doit comporter au plus {{ limit }} caractères" * )
     * * @Assert\NotBlank( message="Ne doit pas être vide")
     */

    private $title;

    /**
     * @ORM\Column(type="datetime")

     * @Assert\Date()
     * @Assert\GreaterThan("today")
     */

    private $start;

    /**
     * @ORM\Column(type="datetime")
     * * @Assert\Date()
     * @Assert\Expression(
     *     "this.getStart() < this.getEnd()",
     *     message="La date fin ne doit pas être antérieure à la date début"
     * )
     */
    private $end;

    /**
     * @ORM\Column(type="text")

     * * @Assert\NotBlank( message="Ne doit pas être vide")
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")

     */
    private $all_day;

    /**
     * @ORM\Column(type="string", length=7)
     */
    private $background_color;

    /**
     * @ORM\Column(type="string", length=7)
     */
    private $border_color;

    /**
     * @ORM\Column(type="string", length=7)
     */
    private $text_color;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(\DateTimeInterface $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): ?\DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(\DateTimeInterface $end): self
    {
        $this->end = $end;

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

    public function getAllDay(): ?bool
    {
        return $this->all_day;
    }

    public function setAllDay(bool $all_day): self
    {
        $this->all_day = $all_day;

        return $this;
    }

    public function getBackgroundColor(): ?string
    {
        return $this->background_color;
    }

    public function setBackgroundColor(string $background_color): self
    {
        $this->background_color = $background_color;

        return $this;
    }

    public function getBorderColor(): ?string
    {
        return $this->border_color;
    }

    public function setBorderColor(string $border_color): self
    {
        $this->border_color = $border_color;

        return $this;
    }

    public function getTextColor(): ?string
    {
        return $this->text_color;
    }

    public function setTextColor(string $text_color): self
    {
        $this->text_color = $text_color;

        return $this;
    }
}
