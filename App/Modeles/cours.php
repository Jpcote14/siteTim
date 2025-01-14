<?php

declare(strict_types=1);
namespace App\Modeles;

class Cours
{
    private int $id;
    private string $nom;
    private string $session;
    private int $annee;


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
