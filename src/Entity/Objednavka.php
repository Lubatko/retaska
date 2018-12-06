<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ObjednavkaRepository")
 */
class Objednavka
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $PocetKusu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telefon;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Jmeno;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adresa;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Mesto;

    /**
     * @ORM\Column(type="string" , length=255)
     */
    private $PSC;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Zeme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DOprava;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Platba;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Poznamka;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPocetKusu(): ?int
    {
        return $this->PocetKusu;
    }

    public function setPocetKusu(int $PocetKusu): self
    {
        $this->PocetKusu = $PocetKusu;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getTelefon(): ?float
    {
        return $this->telefon;
    }

    public function setTelefon(float $telefon): self
    {
        $this->telefon = $telefon;

        return $this;
    }

    public function getJmeno(): ?string
    {
        return $this->Jmeno;
    }

    public function setJmeno(string $Jmeno): self
    {
        $this->Jmeno = $Jmeno;

        return $this;
    }

    public function getAdresa(): ?string
    {
        return $this->Adresa;
    }

    public function setAdresa(string $Adresa): self
    {
        $this->Adresa = $Adresa;

        return $this;
    }

    public function getMesto(): ?string
    {
        return $this->Mesto;
    }

    public function setMesto(string $Mesto): self
    {
        $this->Mesto = $Mesto;

        return $this;
    }

    public function getPSC(): ?int
    {
        return $this->PSC;
    }

    public function setPSC(int $PSC): self
    {
        $this->PSC = $PSC;

        return $this;
    }

    public function getZeme(): ?string
    {
        return $this->Zeme;
    }

    public function setZeme(string $Zeme): self
    {
        $this->Zeme = $Zeme;

        return $this;
    }

    public function getDOprava(): ?string
    {
        return $this->DOprava;
    }

    public function setDOprava(string $DOprava): self
    {
        $this->DOprava = $DOprava;

        return $this;
    }

    public function getPlatba(): ?string
    {
        return $this->Platba;
    }

    public function setPlatba(string $Platba): self
    {
        $this->Platba = $Platba;

        return $this;
    }

    public function getPoznamka(): ?string
    {
        return $this->Poznamka;
    }

    public function setPoznamka(?string $Poznamka): self
    {
        $this->Poznamka = $Poznamka;

        return $this;
    }
}
