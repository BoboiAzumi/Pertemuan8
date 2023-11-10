<?php
$a = 10;
$b = 5;

//Operator Artimatika
$penjumlahan = $a + $b; //Hasilnya 15
$pengurangan = $a - $b; //Hasilnya 5
$perkalian = $a * $b; //Hasilnya 50
$pembagian = $a / $b; //Hasilnya 2
$modulus = $a % $b; //Hasilnya 0

//Operator Pembanding
$hasil = ($a == $b); //Hasilnya false, karena 10 tidak sama dengan 5

//Operator Logika
$hasil_logika = ($a > 0 && $b > 0); //Hasilnya true, karena kedua variabel lebih besar dari 0

echo "Hasil Penjumlahan ($a + $b) : ".$penjumlahan."<br>";
echo "Hasil Pengurangan ($a - $b) : ".$pengurangan."<br>";
echo "Hasil Perkalian ($a * $b) : ".$perkalian."<br>";
echo "Hasil Pembagian ($a / $b) : ".$pembagian."<br>";
echo "Hasil Modulus ($a % $b) : ".$modulus."<br>";
echo "Hasil Perbandingan ($a == $b) : ".($hasil? "true": "false")."<br>";
echo "Hasil Logika : ($a > 0 && $b > 0) ".($hasil_logika? "true" : "false")."<br>";