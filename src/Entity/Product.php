<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nazev;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Popis;

    /**
     * @ORM\Column(type="float")
     */
    private $Cena;

    /**
     * @ORM\Column(type="integer")
     */
    private $Skladem;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazev(): ?string
    {
        return $this->Nazev;
    }

    public function setNazev(string $Nazev): self
    {
        $this->Nazev = $Nazev;

        return $this;
    }

    public function getPopis(): ?string
    {
        return $this->Popis;
    }

    public function setPopis(?string $Popis): self
    {
        $this->Popis = $Popis;

        return $this;
    }

    public function getCena(): ?float
    {
        return $this->Cena;
    }

    public function setCena(float $Cena): self
    {
        $this->Cena = $Cena;

        return $this;
    }

    public function getSkladem(): ?int
    {
        return $this->Skladem;
    }

    public function setSkladem(int $Skladem): self
    {
        $this->Skladem = $Skladem;

        return $this;
    }
}
