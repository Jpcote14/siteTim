<?php

declare(strict_types=1);

namespace App\Modeles;

use App\App;
use PDO;

class Cours
{
    private int $id;
    private string $nom;
    private string $session;
    private int $annee;

    public static function trouverParId($unIdCours): Cours
    {
        $chaineSQL = "SELECT * FROM cours WHERE id=:unIdCours";
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(':unIdCours', $unIdCours, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Cours');
        $requetePreparee->execute();
        $unCours = $requetePreparee->fetch();
        return $unCours;
    }

    public static function trouverTout(): array
    {
        $chaineSQL = 'SELECT * FROM cours';
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Cours');
        $requetePreparee->execute();
        $desCours = $requetePreparee->fetchAll();
        return $desCours;
    }


    public function __construct() {}

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


    public function getSession(): string
    {
        return $this->session;
    }


    public function setSession(string $session): void
    {
        $this->session = $session;
    }

    public function getAnnee(): int
    {
        return $this->annee;
    }


    public function setAnnee(int $annee): void
    {
        $this->annee = $annee;
    }
}
