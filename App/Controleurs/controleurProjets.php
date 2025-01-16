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
        $tProjets = [];
        // $tProjets = Projet::trouverTout();
        $tDonnées = array("projets" => $tProjets);
        echo App::getBlade()->run("pages.projets.indexProjets", $tDonnées);
    }

    public function fiche()
    {
        // $unIdProjet = intval($_GET['id']);
        // $projets = Projet::trouverParId($unIdProjet);
        $projets = [];
        $tDonnées = array("projet" => $projets);
        echo App::getBlade()->run("pages.projets.ficheProjets", $tDonnées);
    }
}
