<?php
    //function to check if a number is prime
    function isPrime($number) {
        if ($number <= 1) { return false; }

        //check for factors from 2 to square root of the number
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0) { return false; }
        }
        return true;
    }

    echo "Please enter a number: ";
    $input = trim(fgets(STDIN));

    //convert input to an integer
    $number = (int)$input;

    //check if the number is prime or not
    if (isPrime($number)) {
        echo "$number is a prime number.\n";
    } else {
        echo "$number is not a prime number.\n";
    }
?>