<?php

declare(strict_types=1);

namespace App\Controleurs;

use App\App;
use App\Modeles\Projet;

class ControleurProjets
{

    public function __construct() {}

    public function index()
    {
        $tProjets = Projet::trouverTout();
        $tDonnées = array("projets" => $tProjets);
        echo App::getBlade()->run("pages.projets.indexProjets", $tDonnées);
    }

    public function fiche()
    {
        $unIdProjet = intval($_GET['idProjet']);
        $projet = Projet::trouverParId($unIdProjet);
        $tDonnées = array("projet" => $projet);
        echo App::getBlade()->run("pages.projets.ficheProjets", $tDonnées);
    }
}
