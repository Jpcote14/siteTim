<?php
declare(strict_types=1);

namespace App\Controleurs;

use App\App;

class ControleurSite
{
    public function __construct()
    {
    }

    public function accueil(): void
    {
        $tDonnees = array("contenu"=>"Je suis le contenu de la page d'accueil...");
        echo App::getBlade()->run('pages.accueil',$tDonnees);
    }
}

