<?php
    //initialize the first two numbers sequence
    $fib1 = 0;
    $fib2 = 1;
    $count = 0;

    //output the first two numbers
    echo "$fib1 $fib2 ";

    while ($count < 8) {
        $nextFib = $fib1 + $fib2;
        echo "$nextFib ";

        //update previous two numbers for next iteration
        $fib1 = $fib2;
        $fib2 = $nextFib;

        $count++;
    }
    echo "\n";
?>