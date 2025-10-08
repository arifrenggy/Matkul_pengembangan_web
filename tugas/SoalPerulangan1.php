<?php
$baju = 80000;
$celana = 100000;
$diskon = [3, 6, 9, 12];
//indeks dari 0

for ($i = 1; $i <= 4; $i+) {
  $BajuDiskon = $baju - ($baju * $diskon[$i - 1]) / 100;
  $celanaDiskon = $celana - ($celana * $diskon[$i - 1]) / 100;
  // - 1 di tambhakn untuk menyesuailan indeks 0 mendjadi 1
  $totalDiskon = $BajuDiskon + $celanaDiskon;

  echo "hari ke- $i <br>";
  echo "harga baju setelah diskon: $BajuDiskon <br>";
  echo "harga celana setelah diskon: $celanaDiskon <br>";
  echo "total swtelah diskon: $totalDiskon <br>";
}
?>
