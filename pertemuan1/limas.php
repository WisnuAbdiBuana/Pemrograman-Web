<?php
echo "<h4>aplikasi hitung luas dan volume limas </h4>";
echo "<hr />";

$keliling = 6;
$tinggi = 6;
$luas_alas = 6;
$luas_sisi =6;
$luas = $luas_sisi + $luas_sisi + $luas_sisi + $luas_sisi;
$volume = 1/3 * $luas_alas * $tinggi;

echo "keliling : " . $keliling;
echo "<br/>";
echo "tinggi : " . $tinggi;
echo "<br/>";
echo "luas_sisi : " . $luas_sisi;
echo "<br/>";
echo "luas_alas : " . $luas_alas;
echo "<br/>";
echo "luas : ".$luas;
echo "<br/>";
echo "volume : ".$volume;