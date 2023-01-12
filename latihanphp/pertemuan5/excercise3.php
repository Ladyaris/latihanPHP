<?php
    function segitga($alas, $tinggi) {
        return $alas * $tinggi /2;
    }
      
    $luas = segitga(4, 6);

    echo "Luas segitiga adalah : " . $luas;
?>