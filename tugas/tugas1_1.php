<?php
$jumlahBuku = 4;
$jumlahPensil = 12;
$hargaBuku = 25000;
$hargaPensil = 2000;
$diskon = 5 / 100;

$totalHargaBuku = $jumlahBuku * $hargaBuku;
$totalHargaPensil = $jumlahPensil * $hargaPensil;
$totalHarga = $totalHargaBuku + $totalHargaPensil;

$diskonBuku = $totalHargaBuku * $diskon;
$diskonPensil = $totalHargaPensil * $diskon;

$bukuSetelahDiskon = $totalHargaBuku - $diskonBuku;
$pensilSetelahDiskon = $totalHargaPensil - $diskonPensil;

$total = 0;
$total = $total + $bukuSetelahDiskon;
$total = $total + $pensilSetelahDiskon;

echo "Total harga buku sebelum diskon: $totalHargaBuku <br>";
echo "Total harga pensil sebelum diskon: $totalHargaPensil <br>";
echo "Harga semua item sebelum diskon: $totalHarga <br>";
echo "Diskon Buku (5%): $diskonBuku <br>";
echo "Diskon Pensil (5%): $diskonPensil <br>";
echo "Harga Buku setelah diskon: $bukuSetelahDiskon <br>";
echo "Harga Pensil setelah diskon: $pensilSetelahDiskon <br>";
echo "Harga semua item setelah Diskon: $total";

?>