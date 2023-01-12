<?php
    // echo "~ Menghitung luas segitiga ~";
    // echo "<hr>";

    // $tinggi = 12;
    // $alas = 6;
    // $luas = $alas * $tinggi / 2;

    // echo "Luas segitiga adalah = " . $luas;

    echo "~ Menghitung luas lingkaran ~";
    echo "<hr>";

    echo "Masukkan jari-jari = ";
    $jari = fgets(STDIN);
    $luas = 3.14 * $jari * $jari;

    echo "<br>";
    echo "Luas lingkaran adalah = " . $luas;
?>