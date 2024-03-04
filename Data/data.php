<?php

require_once __DIR__ . "/../Models/Production.php";
require_once __DIR__ . "/../Models/Genre.php";

$fantasy_genre = new Genre("Fantasy");

$first_production = new Production("Harry Potter e la pietra filosofale", "Italian", 2001, $fantasy_genre, 6);
$second_production = new Production("Harry Potter e la camera dei segreti", "Italian", 2002, $fantasy_genre, 9);
$third_production = new Production("Harry Potter e il prigioniero di Azkaban", "Italian", 2004, $fantasy_genre, 8);
$fourth_production = new Production("Harry Potter e il calice di fuoco", "Italian", 2005, $fantasy_genre, 8);
$fifth_production = new Production("Harry Potter e l'ordine della fenice'", "Italian", 2007, $fantasy_genre, 7);
$sixth_production = new Production("Harry Potter e il principe mezzosangue", "Italian", 2009, $fantasy_genre, 8);
$seventh_production = new Production("Harry Potter e i doni della morte - parte 1", "Italian", 2010, $fantasy_genre);
$eighth_production = new Production("Harry Potter e i doni della morte - parte 2", "Italian", 2011, $fantasy_genre, 10);


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
