<?php
echo "<h4>aplikasi hitung luas dan volume limas segitiga </h4>";
echo "<hr />";

$luas_alas = 6;
$tinggi = 4;
$luas_sisi = 4;
$luas = $luas_sisi + $luas_sisi + $luas_sisi + $luas_sisi + $luas_sisi ;
$volume = 1/3 * $luas_alas * $tinggi;

echo "Luas alas: ".$luas_alas;
echo "<br/>";
echo "tinggi: ".$tinggi;
echo "<br/>";
echo "luas :"  .$luas;
echo "<br/>";
echo "volume :" .$volume;