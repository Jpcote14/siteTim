<?php

declare(strict_types=1);

namespace App\Controleurs;

use App\App;
use App\Modeles\Message;
use App\Modeles\Responsable;
use App\Utilitaires\Validateur;


class ControleurMessages
{

    public function __construct() {}

    public function creer()
    {
        $tResponsable = Responsable::trouverTout();
        $tMessages = Message::trouverTout();
        $tDonnées = array(
            "messages" => $tMessages,
            "responsables" => $tResponsable
        );
        echo App::getBlade()->run("pages.nousJoindre.nousJoindre", $tDonnées);
    }

    public function inserer(): void
    {


        $tValidation = $this->validation();

        if ($tValidation === false) {
            return;
        }


        $message = new Message();

        $message->setPrenomNom($tValidation["prenom_nom"]["valeur"]);
        $message->setCourriel($tValidation["courriel"]["valeur"]);
        $message->setTelephone($tValidation["telephone"]["valeur"]);
        $message->setConsentement($tValidation["consentement"]["valeur"] === "1");
        $message->setSujet($tValidation["sujet"]["valeur"]);
        $message->setContenu($tValidation["message"]["valeur"]);
        $message->setResponsableId((int)$tValidation["responsable_id"]["valeur"]);


        $message->inserer();

        header("Location: index.php?controleur=messages&action=creer");
        exit();
    }

    private function validation(): array|bool
    {
        $fichierJson = file_get_contents("../ressources/messagesValidation.json");
        $tMessagesJson = json_decode($fichierJson, true);
        $result = null;
        $tValidation = [];
        $tValidation = Validateur::validerChamp('prenom_nom', "#^[a-zA-ZÀ-ÿ' -]+$#", $tMessagesJson, $tValidation, true);

        $tValidation = Validateur::validerChamp('courriel', "#^[a-zA-Z0-9][a-zA-Z0-9_-]+([.][a-zA-Z0-9_-]+)*[@][a-zA-Z0-9_-]+([.][a-zA-Z0-9_-]+)*[.][a-zA-Z]{2,}$#", $tMessagesJson, $tValidation, true);
        // var_dump($tValidation);
        $tValidation = Validateur::validerChamp('telephone', "#^\d{10}$#", $tMessagesJson, $tValidation, true);
        // var_dump($tValidation);
        $tValidation = Validateur::validerChamp('consentement', "#^(1|0|on|off)$#", $tMessagesJson, $tValidation, true);
        // var_dump($tValidation);
        $tValidation = Validateur::validerChamp('sujet', "#^[a-zA-Z0-9À-ÿ\s'.,;!?éèàùâêîôûäëïöüoeçÇ\"-]*$#", $tMessagesJson, $tValidation, true);
        // var_dump($tValidation);
        $tValidation = Validateur::validerChamp('message', "#^[a-zA-Z0-9À-ÿ\s'.,;!?éèàùâêîôûäëïöüoeçÇ\"-]*$#", $tMessagesJson, $tValidation, true);
        // var_dump($tValidation);
        $tValidation = Validateur::validerChamp('responsable_id', "#^\d{1}$#", $tMessagesJson, $tValidation, true);
        var_dump($tValidation);


        foreach ($tValidation as $validation) {
            if ($validation['valide'] == "faux") {
                $result = false;

                $tResponsable = Responsable::trouverTout();
                $tMessages = Message::trouverTout();

                $tDonnées = array(
                    "messages" => $tMessages,
                    "responsables" => $tResponsable,
                    "tValidation" => $tValidation
                );
                echo App::getBlade()->run("pages.nousJoindre.nousJoindreValidation", $tDonnées);
                return false;
            }
        }
        $result = $tValidation;
        return $result;
    }
}
