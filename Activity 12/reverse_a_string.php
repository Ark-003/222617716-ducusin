<?php
    echo "Enter a string: ";
    $input = trim(fgets(STDIN));

    //initialize an empty string to hold the reversed string
    $reversed = "";

    //get length of input string
    $length = strlen($input);

    //use for loop to reverse string and append each character in reverse
    for ($i = $length - 1; $i >= 0; $i--) { $reversed .= $input[$i]; }

    echo "Output: \"$reversed\"\n";
?>