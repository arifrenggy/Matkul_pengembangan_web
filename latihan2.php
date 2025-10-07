<?php

 //penampil tulisan
echo "bilangan decimal: ";
var_dump(123456789);
echo ("<br>");

echo "octal: ";
var_dump(0123);
echo ("<br>");

echo "decimal: ";
var_dump(0x1A);
echo ("<br>");

echo "binary: ";
var_dump(0b1111);
echo ("<br>");

echo "penggunaan_underscore: ";
var_dump(1_1234_567);
echo ("<br>");

echo "benar ";
var_dump(true);
echo ("<br>");

echo "salah ";
var_dump(false);
echo ("<br>");


//variabel data
$nama = "kurniawan arif renggy";
$prodi = "Teknik Informatika";

echo "nama: $nama";
echo ("<br>");
echo "prodi: $prodi";
echo ("<br>");

//array
$nilai = array (10, 20, 30, 40, 50);
var_dump($nilai);
echo ("<br>");

$nama = ["kurn", "arif"];
var_dump($nama);
echo ("<br>");

$datadiri = [1234, "arifrenggy"];
var_dump($datadiri);
echo ("<br>");


//aritmatika

$hasil =10+10;
var_dump($hasil);
echo ("<br>");

$hasil1 =100 % 3;
var_dump($hasil1);
echo ("<br>");

//operator penugasan
$total=0;
$mangga=10000;
$jeruk=10000;
$apel=5000;

$total =$total + $mangga;
$total =$total + $jeruk;
$total += $apel;
var_dump($total);
echo ("<br>");

var_dump("10" == 10);
echo ("<br>");
var_dump("10" === 10);
echo ("<br>");

var_dump(true&&true);
echo ("<br>");
var_dump(true&&false);
echo ("<br>");

var_dump(true || true);
echo ("<br>");
var_dump(true || false);
echo ("<br>");

var_dump(true XOR true);
echo ("<br>");
var_dump(true XOR false);
echo ("<br>");

var_dump(!true);
echo ("<br>");
var_dump(!false);
echo ("<br>");


//latihan operator
$a = 15;
$b = 4;

echo "a =$a <br>";
echo "b =$b <br>";

echo "penjumlahan: a + b = " . ($a + $b) . "<br>";
echo "pengurangan: a - b = " . ($a - $b) . "<br>";
echo "perkalian: a * b = " . ($a * $b) . "<br>";
echo "pembagian: a / b = " . ($a / $b) . "<br>";
echo "modulus: a % b = " . ($a % $b) . "<br>";
echo "pangkat: a ** b = " . ($a ** $b) . "<br>";

?>