<?php

namespace App\Entity;

use App\Repository\HistoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HistoryRepository::class)
 */
class History
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $result_count;

    /**
     * @ORM\Column(type="integer")
     */
    private $flight_count;

    /**
     * @ORM\Column(type="string")
     */
    private $date;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    public function __construct()
    {
        $this->created_at = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResultCount(): ?int
    {
        return $this->result_count;
    }

    public function setResultCount(int $result_count): self
    {
        $this->result_count = $result_count;

        return $this;
    }

    public function getFlightCount(): ?int
    {
        return $this->flight_count;
    }

    public function setFlightCount(int $flight_count): self
    {
        $this->flight_count = $flight_count;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->created_at;
    }

    public function SetCreatedAt(\DateTime $dateTime): self
    {
        $this->date = $dateTime;

        return $this;

    }
}
