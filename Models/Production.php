<?php

class Production
{
    public $title;
    public $language;
    public $production_year;
    public $genres;
    public $vote;

    function __construct(
        $title,
        $language,
        $production_year,
        $genres,
        $vote,
    ) {
        $this->set_title($title);
        $this->set_language($language);
        $this->set_year($production_year);
        $this->set_genre($genres);
        $this->set_vote($vote);
    }

    public function set_vote($vote)
    {
        if ($vote > 10)
            return $this->vote = 10;
        if ($vote < 1)
            return $this->vote = 1;
        else
            return $this->vote = $vote;
    }

    public function set_title($title)
    {
        if (empty($title) || !is_string($title)) {
            throw new Exception("Il titolo non può essere vuoto o diverso da una stringa");
        } else {
            $this->title = $title;
        }
    }

    public function set_language($language)
    {
        if (empty($language) || !is_string($language)) {
            throw new Exception("La lingua non può essere vuoto o diverso da una stringa");
        } else {
            $this->language = $language;
        }
    }

    public function set_year($production_year)
    {
        if (!is_numeric($production_year)) {
            throw new Exception("L'anno di produzione dev'essere un numero");
        } else {
            $this->production_year = $production_year;
        }
    }

    public function set_genre($genres)
    {
        if (!is_array($genres)) {
            throw new Exception("Generi dev'essere un'array");
        } else {
            $this->genres = $genres;
        }
    }
}
