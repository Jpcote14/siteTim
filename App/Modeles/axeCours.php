<?php

declare(strict_types=1);

namespace App\Modeles;

use App\App;
use PDO;

class AxeCours
{
    private int $id;
    private int $axe_id;
    private int $cours_id;

    public function __construct() {}

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }


    public function getAxeId(): int
    {
        return $this->axeId;
    }


    public function setAxeId(int $axeId): void
    {
        $this->axeId = $axeId;
    }


    public function getCoursId(): int
    {
        return $this->coursId;
    }


    public function setCoursId(int $coursId): void
    {
        $this->coursId = $coursId;
    }
}
