<?php
    function hitungHarga($nama_produk, $harga, $diskon=0){
        if($diskon == 0){
            return $harga;
        } else {
            return $harga - ($harga * ($diskon/100));
        }
    }

    // ga diskon
    $harga1 = hitungHarga("Kaos", 250000);
    // diskon 20%
    $harga2 = hitungHarga("Kemeja", 500000, 20);
    // diskon 30%
    $harga3 = hitungHarga("Jaket", 1000000, 30);

    echo "Harga kaos : " . $harga1 . "<br>";
    echo "Harga Kemeja : " . $harga2 . "<br>";
    echo "Harga Jaket : " . $harga3 . "<br>";
?>