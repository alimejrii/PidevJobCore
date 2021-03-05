<?php

namespace App\Entity;

use App\Repository\MeetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MeetRepository::class)
 */
class Meet
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="integer")
     */
    private $hostId;

    /**
     * @ORM\Column(type="integer")
     */
    private $guestId;

    /**
     * @ORM\Column(type="datetime")
     */
    private $time;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getHostId(): ?int
    {
        return $this->hostId;
    }

    public function setHostId(int $hostId): self
    {
        $this->hostId = $hostId;

        return $this;
    }

    public function getGuestId(): ?int
    {
        return $this->guestId;
    }

    public function setGuestId(int $guestId): self
    {
        $this->guestId = $guestId;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }
}
