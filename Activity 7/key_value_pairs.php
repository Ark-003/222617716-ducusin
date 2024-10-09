<?php
    //create an associative
    $studentInfo = [
        "Name" => "Ark",
        "Age" => 21,
        "Grade" => "C",
        "City" => "Manila"
    ];

    // Use a foreach loop to display the keys and values
    foreach ($studentInfo as $key => $value) { echo "$key: $value\n"; }
?>