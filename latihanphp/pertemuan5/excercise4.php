<?php
    function milk($stock, $needed){
        if($stock > $needed){
            return $stock - $needed;
        } else {
            return 0;
        }
    }

    $groceries = milk(10, 5);

    echo "Here's your groceries, " . $groceries . " milk<br>";
?>