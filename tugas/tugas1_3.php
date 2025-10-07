<?php

$gajiPokok = 5500000;


$tunjangan = $gajiPokok * 10 / 100;
$gajiKotor = $gajiPokok + $tunjangan;
$pajak = $gajiKotor * 11 / 100;
$gajiBersih = $gajiKotor - $pajak;


echo "Gaji Pokok: $gajiPokok <br>";
echo "Tunjangan: $tunjangan <br>";
echo "Gaji Kotor: $gajiKotor <br>";
echo "Pajak: $pajak <br>";
echo "Gaji Bersih: $gajiBersih <br>";

?>
