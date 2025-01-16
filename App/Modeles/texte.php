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

    public static function trouverParId($unIdTexte): Texte
    {
        $chaineSQL = "SELECT * FROM textes WHERE id=:unIdTexte";
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(':unIdTexte', $unIdTexte, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Texte');
        $requetePreparee->execute();
        $texte = $requetePreparee->fetch();
        return $texte;
    }

    public static function trouverTout(): array
    {
        $chaineSQL = 'SELECT * FROM textes';
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Texte');
        $requetePreparee->execute();
        $textes = $requetePreparee->fetchAll();
        return $textes;
    }

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
