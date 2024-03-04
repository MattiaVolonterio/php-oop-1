<?php

require_once __DIR__ . "/../Models/Production.php";
require_once __DIR__ . "/../Models/Genre.php";

$first_production = new Production("Harry Potter e la pietra filosofale", "Italian", 2001, Genre::get_genre_array("Fantasy", "Adventure"), 6);
$second_production = new Production("Harry Potter e la camera dei segreti", "Italian", 2002, Genre::get_genre_array("Fantasy", "Adventure"), 9);
$third_production = new Production("Harry Potter e il prigioniero di Azkaban", "Italian", 2004, Genre::get_genre_array("Fantasy", "Adventure"),  8);
$fourth_production = new Production("Harry Potter e il calice di fuoco", "Italian", 2005, Genre::get_genre_array("Fantasy", "Adventure"),  8);
$fifth_production = new Production("Harry Potter e l'ordine della fenice'", "Italian", 2007, Genre::get_genre_array("Fantasy", "Adventure"),  7);
$sixth_production = new Production("Harry Potter e il principe mezzosangue", "Italian", 2009, Genre::get_genre_array("Fantasy", "Adventure"),  8);
$seventh_production = new Production("Harry Potter e i doni della morte - parte 1", "Italian", 2010, Genre::get_genre_array("Fantasy", "Adventure", "Action"));
$eighth_production = new Production("Harry Potter e i doni della morte - parte 2", "Italian", 2011, Genre::get_genre_array("Fantasy", "Adventure", "Action"),  10);


$productions = [
    $first_production,
    $second_production,
    $third_production,
    $fourth_production,
    $fifth_production,
    $sixth_production,
    $seventh_production,
    $eighth_production
];
