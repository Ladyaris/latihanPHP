<?php
### Pertemuan 5 ###
# Build-in Function

// Function Date
// l = hari
// m = angka dari bulan
// M = nama dari bulan
echo date("M");
echo "<br>";
echo date("l, d M Y");
echo "<br>";

// Function Time
// UNIX TIMESTAMP / EPOCH TIME
echo "<br>";
echo time();
echo "<br>";
echo date("l", time()-60*60*24*100);
echo "<br>";
echo date("d M Y", time()+60*60*24*100);
echo "<br>";
// 60 = detik
// 60 = jam
// 24 = jam dalam sehari
// 2 = hari yang mau dituju

// MKTIME = Membuat detik sendiri
// MKTIME = (0,0,0,0,0,0)
    // Jam, menit, bulan, tanggal, tahun
echo mktime(0,0,0,2,10,2006);
echo "<br>";
echo date("l", mktime(0,0,0,2,10,2006));
echo "<br>";

// strtotime()
// Mng masukin format tanggal
// Keblikannya dari mktime, inputnya string
echo strtotime("26 Maret 2022");
?>