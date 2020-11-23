<?php

namespace App\Entity;

use App\Repository\PersonRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonRepository::class)
 */
class Person
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
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $inpÄutCount;

    /**
     * @ORM\Column(type="integer")
     */
    private $output_count;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $departure;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

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

    public function getInpÄutCount(): ?int
    {
        return $this->inpÄutCount;
    }

    public function setInpÄutCount(int $inpÄutCount): self
    {
        $this->inpÄutCount = $inpÄutCount;

        return $this;
    }

    public function getOutputCount(): ?int
    {
        return $this->output_count;
    }

    public function setOutputCount(int $output_count): self
    {
        $this->output_count = $output_count;

        return $this;
    }

    public function getDeparture(): ?string
    {
        return $this->departure;
    }

    public function setDeparture(string $departure): self
    {
        $this->departure = $departure;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
