<?php
    $correctPass = "password123"; //set correct password
    $passInput = "";

    do {
        echo "Please enter the password: ";
        $passInput = trim(fgets(STDIN)); // get password input

        if ($passInput !== $correctPass) { echo "Incorrect password.\n"; }
        
    } while ($passInput !== $correctPass);
    
    echo "Access Granted.";
?>