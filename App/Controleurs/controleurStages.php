<?php

declare(strict_types=1);

namespace App\Controleurs;

use App\App;
use App\Modeles\Stage;

class ControleurStages{

public function __construct(){

}

public function index()
{
    $tStages = [];
    // $tStages = Stage::trouverTout();
    $tDonnées = array("stages" => $tStages);
    echo App::getBlade()->run("pages.stages", $tDonnées);
}


}