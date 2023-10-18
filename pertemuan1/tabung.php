<?php
echo "<h4>aplikasi hitung luas dan volume tabung </h4>";
echo "<hr />";

const phi = 3.14;
$jarijari = 6;
$tinggi = 6;
$luas_selimut = (2 * phi) * $jarijari * $tinggi;
$luas_permukaan = (2 * phi) * $jarijari * $tinggi + (2 * phi) * $jarijari *$jarijari;
$volume = phi * $jarijari * $jarijari * $tinggi;

echo "phi : " . $phi;
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