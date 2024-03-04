<?php

class Production
{
    public $title;
    public $language;
    public $production_year;
    public $vote;

    function __construct(
        string $title,
        string $language,
        int $production_year,
        int $vote = 5,
    ) {
        $this->title = $title;
        $this->language = $language;
        $this->production_year = $production_year;
        $this->vote = $this->set_vote($vote);
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
}
