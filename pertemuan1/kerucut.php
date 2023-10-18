<?php
echo "<h4>aplikasi hitung luas dan volume kerucut </h4>";
echo "<hr />";

const phi = 3.14;
$jarijari = 6;
$sisi = 6;
$tinggi = 6;
$luas_selimut = (1 + phi) * $jarijari * $sisi;
$luas_permukaan = (1+ phi) * $jarijari * $sisi + (1 + phi) * $jarijari *$jarijari;
$volume = 1/3 * (1 + phi) * $jarijari * $jarijari * $tinggi;

echo "phi : " . $phi;
echo "<br/>";
echo "sisi : " . $sisi;
echo "<br/>";
echo "tinggi : " . $tinggi;
echo "<br/>";
echo "jari - jari : " . $jarijari;
echo "<br/>";
echo "luas_selimut : ".$luas_selimut;
echo "<br/>";
echo "luas_permukaan : ".$luas_permukaan;
echo "<br/>";
echo "volume : ".$volume;
