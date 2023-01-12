<?php
    ####################
    # Pertemuan 6
    # Nama file : Variable Scope
    ####################

    // Variable scope / lingkup variable
    $x = 10;

    // Variable local inside a function
    function tampilX(){
        global $x;
        echo $x;
    }

    tampilX();
?>