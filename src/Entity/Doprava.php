<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DopravaRepository")
 */
class Doprava
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $DPD;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Osobni_odber;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDPD(): ?string
    {
        return $this->DPD;
    }

    public function setDPD(?string $DPD): self
    {
        $this->DPD = $DPD;

        return $this;
    }

    public function getOsobniOdber(): ?string
    {
        return $this->Osobni_odber;
    }

    public function setOsobniOdber(?string $Osobni_odber): self
    {
        $this->Osobni_odber = $Osobni_odber;

        return $this;
    }
}
