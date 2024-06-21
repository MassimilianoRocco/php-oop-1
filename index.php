<?php

include __DIR__ . "/models/Movie.php";

$movies = [
    new Movie("Spider-Man: No Way Home", "Action", "Disney+"),
    new Movie("The Batman", "Action", "Amazon Prime Video"),
    new Movie("Doctor Strange in the Multiverse of Madness", "Fantasy", "Disney+"),
    new Movie("The Matrix Resurrections", "Science Fiction", "HBO Max"),
    new Movie("Uncharted", "Action", "Netflix"),
    new Movie("The Lost City", "Adventure", "Amazon Prime Video"),
    new Movie("Sonic the Hedgehog 2", "Action", "Paramount+"),
    new Movie("Fantastic Beasts: The Secrets of Dumbledore", "Fantasy", "HBO"),
    new Movie("Jurassic World Dominion", "Science Fiction", "Peacock"),
    new Movie("Minions: The Rise of Gru", "Animation", "Universal Pictures"),
];

$movies[7]->setPiattaformaStreaming("SitoPocoAffidabile");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <ul>
        <?php foreach ($movies as $movie) { ?>
            <li><?= $movie->getMovie() ?></li>
            <?php } ?>
    </ul>
    
</body>
</html>