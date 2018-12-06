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
     * @ORM\Column(type="string", length=255)
     */
    private $Nazev;

    public function getNazev(): ?string
    {
        return $this->Nazev;
    }

    public function setNazev(string $Nazev): self
    {
        $this->Nazev = $Nazev;

        return $this;
    }
}
