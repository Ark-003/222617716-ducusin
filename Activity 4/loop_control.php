<?php
    for ($i = 1; $i <= 10; $i++) {

        //use continue to skip 5
        if ($i === 5) { continue; }
        
        //use break to stop loop at 8
        if ($i === 9) { break; } 

        echo $i . " ";
}
?>