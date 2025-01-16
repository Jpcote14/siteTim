<?php

declare(strict_types=1);

namespace App\Modeles;

use App\App;
use PDO;

class Etape
{
    private int $id;
    private string $nom;
    private int $ordre;
    private string $description;
    private int $projetId;

    public function __construct() {}

    public static function trouverParId($unIdEtape): Etape
    {
        $chaineSQL = "SELECT * FROM etapes WHERE id=:unIdEtape";
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(':unIdEtape', $unIdEtape, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Etape');
        $requetePreparee->execute();
        $etape = $requetePreparee->fetch();
        return $etape;
    }

    public static function trouverTout(): array
    {
        $chaineSQL = 'SELECT * FROM etapes';
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Etape');
        $requetePreparee->execute();
        $etapes = $requetePreparee->fetchAll();
        return $etapes;
    }

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


    public function getOrdre(): int
    {
        return $this->ordre;
    }


    public function setOrdre(int $ordre): void
    {
        $this->ordre = $ordre;
    }


    public function getDescription(): string
    {
        return $this->description;
    }


    public function setDescription(string $description): void
    {
        $this->description = $description;
    }


    public function getProjetId(): int
    {
        return $this->projetId;
    }


    public function setProjetId(int $projetId): void
    {
        $this->projetId = $projetId;
    }
}
