<?php

declare(strict_types=1);

class Message
{
    private int $id;
    private string $prenomNom;
    private string $courriel;
    private string $telephone;
    private bool $consentement;
    private string $sujet;
    private string $contenu;
    private \DateTime $dateheureCreation;
    private int $responsableId;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getPrenomNom(): string
    {
        return $this->prenomNom;
    }

    public function setPrenomNom(string $prenomNom): void
    {
        $this->prenomNom = $prenomNom;
    }

    public function getCourriel(): string
    {
        return $this->courriel;
    }

    public function setCourriel(string $courriel): void
    {
        $this->courriel = $courriel;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }

    public function getConsentement(): bool
    {
        return $this->consentement;
    }

    public function setConsentement(bool $consentement): void
    {
        $this->consentement = $consentement;
    }

    public function getSujet(): string
    {
        return $this->sujet;
    }

    public function setSujet(string $sujet): void
    {
        $this->sujet = $sujet;
    }

    public function getContenu(): string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): void
    {
        $this->contenu = $contenu;
    }

    public function getDateheureCreation(): \DateTime
    {
        return $this->dateheureCreation;
    }

    public function setDateheureCreation(\DateTime $dateheureCreation): void
    {
        $this->dateheureCreation = $dateheureCreation;
    }

    public function getResponsableId(): int
    {
        return $this->responsableId;
    }

    public function setResponsableId(int $responsableId): void
    {
        $this->responsableId = $responsableId;
    }
}
