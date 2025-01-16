<?php

declare(strict_types=1);

namespace App\Modeles;

use App\App;
use PDO;

class Texte
{
    private int $id;
    private string $titre;
    private string $texte;
    private string $epic;

    public function __construct() {}

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    public function getTexte(): string
    {
        return $this->texte;
    }

    public function setTexte(string $texte): void
    {
        $this->texte = $texte;
    }

    public function getEpic(): string
    {
        return $this->epic;
    }

    public function setEpic(string $epic): void
    {
        $this->epic = $epic;
    }
}
