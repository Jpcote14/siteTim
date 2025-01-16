<?php

declare(strict_types=1);

namespace App\Modeles;

use App\App;
use PDO;

class Responsable
{
    private int $id;
    private string $responsabilite;
    private string $courriel;
    private string $prenom;
    private string $nom;
    private string $telephone;

    public function __construct() {}

    public static function trouverParId($unIdResponsable): Responsable
    {
        $chaineSQL = "SELECT * FROM responsables WHERE id=:unIdResponsable";
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(':unIdResponsable', $unIdResponsable, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Responsable');
        $requetePreparee->execute();
        $responsable = $requetePreparee->fetch();
        return $responsable;
    }

    public static function trouverTout(): array
    {
        $chaineSQL = 'SELECT * FROM responsables';
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Responsable');
        $requetePreparee->execute();
        $responsables = $requetePreparee->fetchAll();
        return $responsables;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getResponsabilite(): string
    {
        return $this->responsabilite;
    }

    public function setResponsabilite(string $responsabilite): void
    {
        $this->responsabilite = $responsabilite;
    }

    public function getCourriel(): string
    {
        return $this->courriel;
    }

    public function setCourriel(string $courriel): void
    {
        $this->courriel = $courriel;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }
}
