<?php

declare(strict_types=1);

namespace App\Modeles;

use App\App;
use PDO;

class Axe
{
    private int $id;
    private string $nom;

    public function __construct() {}

    public static function trouverParId($unIdAxe): Axe
    {
        $chaineSQL = "SELECT * FROM axes WHERE id=:unIdAxe";
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(':unIdAxe', $unIdAxe, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modele\Axe');
        $requetePreparee->execute();
        $axe = $requetePreparee->fetch();
        return $axe;
    }

    public static function trouverTout(): array
    {
        $chaineSQL = 'SELECT * FROM axes';
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modele\Axe');
        $requetePreparee->execute();
        $axes = $requetePreparee->fetchAll();
        return $axes;
    }

    //Getter setter

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
