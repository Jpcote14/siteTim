<?php

declare(strict_types=1);

namespace App\Modeles;

use App\App;
use PDO;

class Message
{
    private int $id = 0;
    private string $prenom_nom = "";
    private string $courriel = "";
    private ?string $telephone = null;
    private bool $consentement = false;
    private string $sujet = "";
    private string $contenu = "";
    private \DateTime $dateheureCreation;
    private int $responsable_id = 0;

    public function __construct() {}

    public static function trouverParId($unIdMessage): Message
    {
        $chaineSQL = "SELECT * FROM messages WHERE id=:unIdMessage";
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(':unIdMessage', $unIdMessage, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Message');
        $requetePreparee->execute();
        $message = $requetePreparee->fetch();
        return $message;
    }

    public static function trouverTout(): array
    {
        $chaineSQL = 'SELECT * FROM messages';
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Message');
        $requetePreparee->execute();
        $messages = $requetePreparee->fetchAll();
        return $messages;
    }

    public function inserer(): void
    {
        $sql = "INSERT INTO messages (prenom_nom, courriel, telephone, consentement, sujet, contenu, responsable_id)
            VALUES (:prenom_nom, :courriel, :telephone, :consentement, :sujet, :contenu, :responsable_id)";

        $requetePreparee = APP::getPDO()->prepare($sql);

        $requetePreparee->bindParam(':prenom_nom', $this->prenom_nom, PDO::PARAM_STR);
        $requetePreparee->bindParam(':courriel', $this->courriel, PDO::PARAM_STR);

        $requetePreparee->bindValue(':telephone', !empty($this->telephone) ? $this->telephone : null, PDO::PARAM_STR);

        $requetePreparee->bindValue(':consentement', $this->consentement ? 1 : 0, PDO::PARAM_INT);

        $requetePreparee->bindParam(':sujet', $this->sujet, PDO::PARAM_STR);
        $requetePreparee->bindParam(':contenu', $this->contenu, PDO::PARAM_STR);
        $requetePreparee->bindParam(':responsable_id', $this->responsable_id, PDO::PARAM_INT);

        $requetePreparee->execute();
    }





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
        return $this->prenom_nom;
    }

    public function setPrenomNom(string $prenomNom): void
    {
        $this->prenom_nom = $prenomNom;
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
        return $this->responsable_id;
    }

    public function setResponsableId(int $responsable_id): void
    {
        $this->responsable_id = $responsable_id;
    }
}
