<?php
    for ($i = 1; $i <= 50; $i++) {

        //check for multiples of both 3 and 5
        if ($i % 3 === 0 && $i % 5 === 0) { echo "FizzBuzz "; }

        //check for multiples of 3
        elseif ($i % 3 === 0) { echo "Fizz "; }

        //check for multiples of 5
        elseif ($i % 5 === 0) { echo "Buzz "; }

        //if not a multiple of 3 or 5, print the number
        else { echo $i . " "; }
    }
?>