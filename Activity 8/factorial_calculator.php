<?php
    $num = 9;
    $factorial = 1;

    //multiply current value of factorial by i
    for ($i = $num; $i > 0; $i--) {
        $factorial *= $i; 
    }

    echo "Factorial of $num is: $factorial\n";
?>