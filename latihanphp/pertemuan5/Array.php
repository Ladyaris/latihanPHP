<?php
    # Pertemuan 5
    # Nama file : Array

    // Make Array
    $day = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

    var_dump($day);

    // Show 1 elemnt in Array
    echo $day[0];
    echo "<br>";

    // Add element to Array
    echo "Sebelum ditambah <br>";
    var_dump($day);
    echo "<br>";
    echo "Setelah ditambah <br>";
    $day[] = "Saturday";
    var_dump($day);

    echo "<br>";
    
    // Delete element in Array
    unset($day[0]);
    var_dump($day);
?>