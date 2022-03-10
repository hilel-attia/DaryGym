<?php

namespace App\Entity;

use App\Repository\StreamingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StreamingRepository::class)
 */
class Streaming
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
    private $room;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $audio ;

    /**
   * @ORM\Column(type="integer")
     */
    private $video;

    /**
 * @ORM\Column(type="integer")
     */
    private $notify;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
    public function getRoom(): ?string
    {
        return $this->room;
    }

    public function setRoom(string $room): self
    {
        $this->room = $room;

        return $this;
    }

    public function getAudio(): ?int
    {
        return $this->audio;
    }

    public function setAudio(?int $audio): self
    {
        $this->audio = $audio;

        return $this;
    }

    public function getVideo(): ?int
    {
        return $this->video;
    }

    public function setVideo(?int $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function getNotify(): ?int
    {
        return $this->notify;
    }

    public function setNotify(?int $notify): self
    {
        $this->notify = $notify;

        return $this;
    }
}
