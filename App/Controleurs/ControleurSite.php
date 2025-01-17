<?php

declare(strict_types=1);

namespace App\Controleurs;

use App\App;

class ControleurSite
{
    public function __construct() {}

    public function accueil(): void
    {
        $tDonnees = [];
        echo App::getBlade()->run('pages.accueil', $tDonnees);
    }
}
