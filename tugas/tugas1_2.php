<?php
$tabunganAwal = 5000000;
$bungaTahunan = 5 / 100;  
$Pajak = 10 / 100;  
$jangkaWaktu = 2; 

$totalBungaKotor = 0;
$saldoSaatIni = $tabunganAwal;



$bungaTahun1 = $saldoSaatIni * $bungaTahunan;
$saldoSaatIni += $bungaTahun1; 
$totalBungaKotor += $bungaTahun1;


$bungaTahun2 = $saldoSaatIni * $bungaTahunan;
$saldoSaatIni += $bungaTahun2; 
$totalBungaKotor += $bungaTahun2;


$potonganPajak = $totalBungaKotor * $Pajak;
$bungaBersih = $totalBungaKotor - $potonganPajak;
$tabunganAkhir = $tabunganAwal + $bungaBersih;


echo "Tabungan Awal: $tabunganAwal <br>";
echo "Bunga Kotor : $totalBungaKotor <br>";
echo "Pajak Bunga (10%): $potonganPajak <br>";
echo "Total Tabungan Akhir: $tabunganAkhir <br>";

?>
