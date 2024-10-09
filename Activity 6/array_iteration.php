<?php
    //create array
    $favoriteMovies = [
        "Oppenheimer",
        "Interstellar",
        "Les Miserables",
        "Spider-Man: Across the Spider-Verse",
        "Knives Out"
    ];
    
    //output movie number and name
    foreach ($favoriteMovies as $index => $movie) { echo ($index + 1) . ". " . $movie . "\n"; }
?>