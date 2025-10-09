<?php
$baju = 80000;
$celana = 100000;
$totalSeluruh = 0;

$diskon = [3, 6, 9, 12];
array_unshift($diskon, null); //untuk mnnyatakan indeks 0= kosong, dan indeks ke satu itu sebgai indeks pertama
echo "harga baju : $baju <br>";
echo "harga celana: $celana <br>";

for ($i = 1; $i <= 4; $i++) {
  $hargaBaju = $baju;
  $hargaCelana = $celana;
  
  $BajuDiskon = $baju - ($hargaBaju * $diskon[$i]) / 100;
  $celanaDiskon = $celana - ($hargaCelana * $diskon[$i]) / 100;
  $totalDiskon = $BajuDiskon + $celanaDiskon;

  echo "hari ke- $i <br>";
  echo "harga baju setelah diskon: $BajuDiskon <br>";
  echo "harga celana setelah diskon: $celanaDiskon <br>";
  echo "total swtelah diskon: $totalDiskon <br>";

// mengkhitung diskon 5 persen jika > 150.000 
 if ($totalDiskon > 150000) {
    $diskon5persen = 5 / 100;
    $totalDiskon = $totalDiskon - ($totalDiskon * $diskon5persen);
    echo "total belanja melebih 150.000 mendapatkan diskon 5persen: $totalDiskon <br>";
    
   }
$totalSeluruh = $totalSeluruh + $totalDiskon;
 }

echo "total seluruh : $totalSeluruh";
?>