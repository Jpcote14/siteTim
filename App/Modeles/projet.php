<?php

declare(strict_types=1);

namespace App\Modeles;

use App\App;
use PDO;

class Projet
{
    private int $id;
    private string $titre;
    private string $technologies;
    private string $description;
    private string $url;
    private int $diplomeId;
    private int $coursId;

    public function __construct() {}

    public static function trouverParId($unIdProjet): Projet
    {
        $chaineSQL = "SELECT * FROM projets WHERE id=:unIdProjet";
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(':unIdProjet', $unIdProjet, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modele\Projet');
        $requetePreparee->execute();
        $projet = $requetePreparee->fetch();
        return $projet;
    }

    public static function trouverTout(): array
    {
        $chaineSQL = 'SELECT * FROM projets';
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modele\Projet');
        $requetePreparee->execute();
        $projets = $requetePreparee->fetchAll();
        return $projets;
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

    public function getTechnologies(): string
    {
        return $this->technologies;
    }

    public function setTechnologies(string $technologies): void
    {
        $this->technologies = $technologies;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getDiplomeId(): int
    {
        return $this->diplomeId;
    }

    public function setDiplomeId(int $diplomeId): void
    {
        $this->diplomeId = $diplomeId;
    }

    public function getCoursId(): int
    {
        return $this->coursId;
    }

    public function setCoursId(int $coursId): void
    {
        $this->coursId = $coursId;
    }
}
