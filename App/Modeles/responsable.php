<?php

declare(strict_types=1);

class Responsable
{
    private int $id;
    private string $responsabilite;
    private string $courriel;
    private string $prenom;
    private string $nom;
    private string $telephone;

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
