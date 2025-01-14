<?php

declare(strict_types=1);

namespace App\Controleurs;

use App\App;
use App\Modeles\Message;

class ControleurMessages{

public function __construct(){

}

public function creer()
{
    $tMessages = [];
    // $tMessages = Message::trouverTout();
    $tDonnées = array("messages" => $tMessages);
    echo App::getBlade()->run("pages.nousJoindre", $tDonnées);
}


}