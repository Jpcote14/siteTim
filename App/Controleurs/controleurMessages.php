<?php

declare(strict_types=1);

namespace App\Controleurs;

use App\App;
use App\Modeles\Message;
use App\Modeles\Responsable;

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
        echo App::getBlade()->run("pages.nousJoindre", $tDonnées);
    }
}
