<?php

class Genre
{
    // public $type_one;
    // public $type_two;
    // public $type_three;

    // function __construct(string $type_one, string $type_two = null, string $type_three = null)
    // {
    //     $this->type_one = $type_one;
    //     $this->type_two = $type_two;
    //     $this->type_three = $type_three;
    // }

    public static function get_genre_array($type_one, $type_two = null, $type_three = null)
    {
        $genre_array = [$type_one];
        if ($type_two != null) {
            $genre_array[] = $type_two;
        }
        if ($type_three != null) {
            $genre_array[] = $type_three;
        }

        return $genre_array;
    }
}
