<?php

declare(strict_types=1);
namespace App\Modeles;

class Axe
{
    private int $id;
    private string $nom;


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

 
    public function getNom(): string
    {
        return $this->nom;
    }


    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }
}
