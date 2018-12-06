<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlatbaRepository")
 */
class Platba
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
    private $prevodem;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $dobirka;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrevodem(): ?string
    {
        return $this->prevodem;
    }

    public function setPrevodem(?string $prevodem): self
    {
        $this->prevodem = $prevodem;

        return $this;
    }

    public function getDobirka(): ?string
    {
        return $this->dobirka;
    }

    public function setDobirka(?string $dobirka): self
    {
        $this->dobirka = $dobirka;

        return $this;
    }
}
