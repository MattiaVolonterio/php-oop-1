<?php

require_once __DIR__ . "/./Production.php";

class TVSerie extends Production
{
    public $seasons;

    function __construct(
        $title,
        $language,
        $production_year,
        $genres,
        $vote,
        $seasons
    ) {
        parent::__construct($title, $language, $production_year, $genres, $vote);
        $this->set_seasons($seasons);
    }

    public function set_seasons($seasons)
    {
        if (!is_numeric($seasons)) {
            throw new Exception("Il valore di seasons dev'essere un numero");
        } else {
            $this->seasons = $seasons;
        }
    }
}
