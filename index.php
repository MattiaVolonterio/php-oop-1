<?php
require_once __DIR__ . "/Models/Production.php";
require_once __DIR__ . "/Models/Genre.php";
require_once __DIR__ . "/Data/data.php";
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
</head>

<body>
    <div class="container mt-3">
        <h1 class="text-center mb-5">PHP OOP - Production</h1>

        <table class="table">
            <thead class="table-light">
                <th>Titolo</th>
                <th class="text-end">Lingua</th>
                <th class="text-end">Anno di Produzione</th>
                <th class="text-end">Genere</th>
                <th class="text-end">Voto</th>
                <th class="text-end">Profitto</th>
                <th class="text-end">Durata</th>
                <th class="text-end">Numero di Stagioni</th>
            </thead>

            <tbody class="table-group-divider">
                <?php foreach ($productions as $production) : ?>
                    <?php include __DIR__ . "/template/row.php" ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>