<?php

use function PHPSTORM_META\type;

require_once __DIR__ . "/../Models/Production.php";
require_once __DIR__ . "/../Models/Genre.php";
require_once __DIR__ . "/../Models/Movie.php";
require_once __DIR__ . "/../Models/TVSerie.php";


try {
    // GENERI
    $fantasy = new Genre("Fantasy");
    $adventure = new Genre("Adventure");
    $action = new Genre("Action");
    $horror = new Genre("Horror");
    $comedy = new Genre("Comedy");
    $drama = new Genre("Dramatic");

    $movie_1 = new Movie("Harry Potter e la pietra filosofale", "En", 2001, [$fantasy->type, $adventure->type], 6, 105000000, 155);
    $movie_2 = new Movie("Harry Potter e la camera dei segreti", "En", 2002, [$fantasy->type, $adventure->type], 9, 10508955, 180);
    $movie_3 = new Movie("Harry Potter e il prigioniero di Azkaban", "En", 2004, [$fantasy->type, $adventure->type], 8, 110002586, 125);
    $movie_4 = new Movie("Harry Potter e il calice di fuoco", "En", 2005, [$fantasy->type, $adventure->type], 10, 126485141, 100);
    $movie_5 = new Movie("Harry Potter e l'ordine della fenice'", "En", 2007, [$fantasy->type, $adventure->type], 12, 100000000, 90);
    $movie_6 = new Movie("Harry Potter e il principe mezzosangue", "En", 2009, [$fantasy->type, $adventure->type], 9, 1544445896, 110);
    $movie_7 = new Movie("Harry Potter e i doni della morte - parte 1", "En", 2010, [$fantasy->type, $adventure->type, $horror->type], 8, 108542136, 192);
    $movie_8 = new Movie("Harry Potter e i doni della morte - parte 2", "En", 2011, [$fantasy->type, $adventure->type, $horror->type], 6, 105555555, 154);
    $serie_1 = new TVSerie("Stranger Things", "En", 2016, [$horror->type], 9, 4);
    $serie_2 = new TVSerie("La casa di carta", "Es", 2017, [$action->type, $drama->type], 9, 5);
    $serie_3 = new TVSerie("One piece", "En", 2023, [$action->type, $adventure->type, $fantasy->type], 9, 1);
    $serie_4 = new TVSerie("Lucifer", "En", 2016, [$drama->type], 9, 6);



    $productions = [
        $movie_1,
        $serie_1,
        $movie_2,
        $serie_2,
        $movie_3,
        $serie_3,
        $movie_4,
        $serie_4,
        $movie_5,
        $movie_6,
        $movie_7,
        $movie_8,

    ];
} catch (Exception $e) {
    $error = $e->getMessage();
    include "./errorPage.php";
    exit();
}
