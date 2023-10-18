<?php
echo "<h4>aplikasi hitung luas dan volume bola </h4>";
echo "<hr />";

const phi = 3.14;
$jarijari = 6;
$luas = (4 * phi) * $jarijari * $jarijari;
$volume = 4/3* phi * $jarijari * $jarijari * $jarijari;

echo "phi : " . $phi;
echo "<br/>";
echo "jari - jari : " . $jarijari;
echo "<br/>";
echo "luas : ".$luas;
echo "<br/>";
echo "volume : ".$volume;