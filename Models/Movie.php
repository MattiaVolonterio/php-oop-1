<?php

require_once __DIR__ . "/./Production.php";

class Movie extends Production
{
    public $profits;
    public $duration;

    function __construct(
        $title,
        $language,
        $production_year,
        $genres,
        $vote,
        $profits,
        $duration
    ) {
        parent::__construct($title, $language, $production_year, $genres, $vote);
        $this->set_profits($profits);
        $this->set_duration($duration);
    }

    public function set_profits($profits)
    {
        if (!is_numeric($profits)) {
            throw new Exception("Il valore di profits dev'essere un numero");
        } else {
            $this->profits = $profits;
        }
    }

    public function set_duration($duration)
    {
        if (!is_numeric($duration)) {
            throw new Exception("Il valore di duration dev'essere un numero");
        } else {
            $this->duration = $duration;
        }
    }
}
