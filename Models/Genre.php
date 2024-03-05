<?php

class Genre
{
    public $type;

    function __construct($type)
    {
        $this->set_type($type);
    }

    public function set_type($type)
    {
        if (empty($type) || !is_string($type)) {
            throw new Exception("Il genere non può essere vuoto o diverso da una stringa");
        } else {
            $this->type = $type;
        }
    }
}
