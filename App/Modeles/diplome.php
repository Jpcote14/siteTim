<?php

declare(strict_types=1);
namespace App\Modeles;

class Diplome
{
    private int $id;
    private string $nom;
    private string $prenom;
    private string $presentation;
    private bool $interetConception;
    private bool $interetMedias;
    private bool $interetIntegration;
    private bool $interetProgrammation;
    private string $courriel;
    private string $linkedin;
    private string $siteWeb;

  
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

  
    public function getPrenom(): string
    {
        return $this->prenom;
    }

  
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

  
    public function getPresentation(): string
    {
        return $this->presentation;
    }

  
    public function setPresentation(string $presentation): void
    {
        $this->presentation = $presentation;
    }

  
    public function getInteretConception(): bool
    {
        return $this->interetConception;
    }

   
    public function setInteretConception(bool $interetConception): void
    {
        $this->interetConception = $interetConception;
    }

    
    public function getInteretMedias(): bool
    {
        return $this->interetMedias;
    }

   
    public function setInteretMedias(bool $interetMedias): void
    {
        $this->interetMedias = $interetMedias;
    }

  
    public function getInteretIntegration(): bool
    {
        return $this->interetIntegration;
    }

    public function setInteretIntegration(bool $interetIntegration): void
    {
        $this->interetIntegration = $interetIntegration;
    }

    
    public function getInteretProgrammation(): bool
    {
        return $this->interetProgrammation;
    }

  
    public function setInteretProgrammation(bool $interetProgrammation): void
    {
        $this->interetProgrammation = $interetProgrammation;
    }

    
    public function getCourriel(): string
    {
        return $this->courriel;
    }

    
    public function setCourriel(string $courriel): void
    {
        $this->courriel = $courriel;
    }

   
    public function getLinkedin(): string
    {
        return $this->linkedin;
    }

   
    public function setLinkedin(string $linkedin): void
    {
        $this->linkedin = $linkedin;
    }

    
    public function getSiteWeb(): string
    {
        return $this->siteWeb;
    }

    
    public function setSiteWeb(string $siteWeb): void
    {
        $this->siteWeb = $siteWeb;
    }
}
