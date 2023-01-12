<?php
    echo "Nilai anda: 90 <br>";
    echo "Grade: $nilai" ; 
    $nilai = 90;

    if($nilai > 90){
        echo "A+";
    } elseif ($nilai > 80){
        echo "A";
    } elseif ($nilai > 70){
        echo "B+";
    } elseif ($nilai > 60){
        echo "B";
    } elseif ($nilai > 50){
        echo "C+";
    } elseif ($nilai > 40){
        echo "C";
    } elseif ($nilai > 30){
        echo "D";
    } elseif ($nilai > 20){
        echo "E";
    } elseif ($nilai = null) {
        echo "F";
    }
?>