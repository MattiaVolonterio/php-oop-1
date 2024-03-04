<?php

class Production
{
    public $title;
    public $language;
    public $vote;

    function __construct(
        string $title,
        string $language,
        int $vote
    ) {
        $this->title = $title;
        $this->language = $language;
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


$first_production = new Production("Harry Potter e la camera dei segreti", "Italian", 10);
var_dump($first_production);

$second_production = new Production("Harry Potter e l'ordine della fenice", "Italian", 8);
var_dump($second_production);
