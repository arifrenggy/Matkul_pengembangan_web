<?php
 //soal ;
// suatu hari ibu pergi kepasar ibu membeli:
//daging babi 4.5kg per1kg 135.000
//beli daging ayam 5.8kg harga per1kg 75000
//minyak goreng 2.5 liter, per1liter 10.000
//telur 20butir. perbutir 3.000
//bumbu dapur seharga 200.000
//jika belanja di hari selasa, semua belanja yang berkaitan dengan daging mendpatkan diskon 8 persen
//jika hari rabu, diskon 5 persen akan berlaku jika ibu adalah member,
//jika hari sabtu, dan ibu bukan member hanya dapat diskon 10 persen pada belanjaan bumbu dapur 

$babi = 4.5; 
$ayam = 5.8; 
$minyakGoreng = 2.5; 
$telur = 20; 
$bumbu = 200000; 

$hargaBabi = 135000;
$hargaAyam = 75000;
$hargaMinyak = 10000;
$hargaTelur = 3000;

$totalHargaBabi = $babi * $hargaBabi;
$totalHargaAyam = $ayam * $hargaAyam;
$totalHargaMinyak = $minyakGoreng * $hargaMinyak;
$totalHargaTelur = $telur * $hargaTelur;
$totalHargaBumbu = $bumbu; 

$totalHargaSemua = $totalHargaBabi + $totalHargaAyam + $totalHargaMinyak + $totalHargaTelur + $totalHargaBumbu;

$hariBelanja = "sabtu";
$statusMember = "member";

echo "Daging babi $babi kg dengan harga $hargaBabi/kg = $totalHargaBabi <br>";
echo "Daging ayam $ayam kg dengan harga $hargaAyam/kg = $totalHargaAyam <br>";
echo "Minyak $minyakGoreng liter dengan harga $hargaMinyak/liter = $totalHargaMinyak <br>";
echo "Telur Ayam $telur butir dengan harga $hargaTelur/butir = $totalHargaTelur <br>";
echo "Bumbu = $totalHargaBumbu <br>";

if ($hariBelanja == "selasa") {
    $diskonBabi = 8 / 100;
    $diskonAyam = 8 / 100;
    
    $hargaBabiFinal = $totalHargaBabi - ($totalHargaBabi * $diskonBabi);
    $hargaAyamFinal = $totalHargaAyam - ($totalHargaAyam * $diskonAyam);

    $totalBayar = $hargaBabiFinal + $hargaAyamFinal + $totalHargaMinyak + $totalHargaTelur + $totalHargaBumbu;
    echo "Total Bayar sebelum diskon: $totalHargaSemua <br>";
    echo "________________________________________________<br>";
    echo "Hari $hariBelanja, diskon 8% untuk daging <br>";
    echo "Harga babi $totalHargaBabi -> diskon 8% menjadi $hargaBabiFinal <br>";
    echo "Harga Ayam $totalHargaAyam -> diskon 8% menjadi $hargaAyamFinal <br>";
    echo "Total bayar setelah potong diskon: $totalBayar <br>";

} elseif ($hariBelanja == "rabu" && $statusMember == "member") {
    $diskon = 5 / 100;

    $hargaBabiFinal = $totalHargaBabi - ($totalHargaBabi * $diskon);
    $hargaAyamFinal = $totalHargaAyam - ($totalHargaAyam * $diskon);
    $hargaMinyakFinal = $totalHargaMinyak - ($totalHargaMinyak * $diskon);
    $hargaTelurFinal = $totalHargaTelur - ($totalHargaTelur * $diskon);
    $hargaBumbuFinal = $totalHargaBumbu - ($totalHargaBumbu * $diskon);

    $totalBayar = $hargaBabiFinal + $hargaAyamFinal + $hargaMinyakFinal + $hargaTelurFinal + $hargaBumbuFinal;
    echo "Total Bayar sebelum diskon: $$totalHargaSemua <br>";
    echo "________________________________________________<br>";
    echo "Hari $hariBelanja, untuk $statusMember dapat diskon 5% untuk semua belanjaan <br>";
    echo "Harga babi $totalHargaBabi -> diskon 5% menjadi $hargaBabiFinal <br>";
    echo "Harga Ayam $totalHargaAyam -> diskon 5% menjadi $hargaAyamFinal <br>";
    echo "Harga minyak $totalHargaMinyak -> diskon 5% menjadi $hargaMinyakFinal <br>";
    echo "Harga telur $totalHargaTelur -> diskon 5% menjadi $hargaTelurFinal <br>";
    echo "Harga bumbu $totalHargaBumbu -> diskon 5% menjadi $hargaBumbuFinal <br>";
    echo "Total bayar: $totalBayar <br>";

} elseif ($hariBelanja == "sabtu" && $statusMember == "bukan member") {
    $diskonBumbu = 10 / 100;

    $hargaBumbuFinal = $totalHargaBumbu - ($totalHargaBumbu * $diskonBumbu);
    $totalBayar = $totalHargaBabi + $totalHargaAyam + $totalHargaMinyak + $totalHargaTelur + $hargaBumbuFinal;
    echo "Total Bayar sebelum diskon: $$totalHargaSemua <br>";
    echo "________________________________________________<br>";
    echo "Hari $hariBelanja, jika $statusMember, diskon 10% hanya untuk bumbu <br>";
    echo "Harga bumbu $totalHargaBumbu -> diskon 10% menjadi $hargaBumbuFinal <br>";
    echo "Total bayar: $totalBayar <br>";

} else {
  echo "Total bayar= $totalHargaSemua <br>";
  echo "________________________________________________<br>";
    echo "Untuk $hariBelanja dengan status $statusMember tidak ada diskon<br>";
}
?>