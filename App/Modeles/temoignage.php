<?php

declare(strict_types=1);

namespace App\Modeles;

use App\App;
use PDO;

class Temoignage
{
    private int $id;
    private string $temoin;
    private string $titrePoste;
    private string $entreprise;
    private string $urlEntreprise;
    private string $temoignage;
    private int $anneeDiplomation;

    public function __construct() {}

    public static function trouverParId($unIdTemoignage): Temoignage
    {
        $chaineSQL = "SELECT * FROM temoignages WHERE id=:unIdTemoignage";
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(':unIdTemoignage', $unIdTemoignage, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modele\Temoignage');
        $requetePreparee->execute();
        $temoignage = $requetePreparee->fetch();
        return $temoignage;
    }

    public static function trouverTout(): array
    {
        $chaineSQL = 'SELECT * FROM temoignages';
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modele\Temoignage');
        $requetePreparee->execute();
        $temoignages = $requetePreparee->fetchAll();
        return $temoignages;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTemoin(): string
    {
        return $this->temoin;
    }

    public function setTemoin(string $temoin): void
    {
        $this->temoin = $temoin;
    }

    public function getTitrePoste(): string
    {
        return $this->titrePoste;
    }

    public function setTitrePoste(string $titrePoste): void
    {
        $this->titrePoste = $titrePoste;
    }

    public function getEntreprise(): string
    {
        return $this->entreprise;
    }

    public function setEntreprise(string $entreprise): void
    {
        $this->entreprise = $entreprise;
    }

    public function getUrlEntreprise(): string
    {
        return $this->urlEntreprise;
    }

    public function setUrlEntreprise(string $urlEntreprise): void
    {
        $this->urlEntreprise = $urlEntreprise;
    }

    public function getTemoignage(): string
    {
        return $this->temoignage;
    }

    public function setTemoignage(string $temoignage): void
    {
        $this->temoignage = $temoignage;
    }

    public function getAnneeDiplomation(): int
    {
        return $this->anneeDiplomation;
    }

    public function setAnneeDiplomation(int $anneeDiplomation): void
    {
        $this->anneeDiplomation = $anneeDiplomation;
    }
}
