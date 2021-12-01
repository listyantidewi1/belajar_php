<?php

echo "<h2>Indexed Array<br/></h2>";

//array 1 dimensi dengan indeks (indexed array)
$buah2an = array("Jeruk", "Mangga", "Jambu", "Kesemek");

echo "Saya suka buah " . $buah2an[1] . " dan " . $buah2an[2] . "<br/>";

//cetak seluruh elemen array
$panjangArray = count($buah2an);
echo "Panjang array buah2an adalah $panjangArray elemen";
echo "<br/>Anggota/elemen array buah2an adalah :";

for ($i = 0; $i < $panjangArray; $i++) {
    echo "<br/>" . $buah2an[$i];
}

//associative array
echo "<h2><br/>Associative Array<br/></h2>";

$kelas = array("XIRPL1" => "Kelas XI RPL 1", "XIRPL2" => "Kelas XI RPL 2", "XIIRPL1" => "Kelas XII RPL 1", "XIIRPL2" => "Kelas XII RPL 2");

echo "Saya adalah siswa " . $kelas['XIRPL2'] . "<br/>";

foreach ($kelas as $i => $val) {
    echo "Key= " . $i . ", Nilai= " . $val;
    echo "<br/>";
}

//Array multidimensi
echo "<br/><h2>Array Multidimensi</h2>";

$buah = array(
    array("Jeruk", 45, 12),
    array("Mangga", 25, 10),
    array("Kelengkeng", 90, 27)
);

echo "Buah " . $buah[1][0] . " stock-nya " . $buah[1][1] . " sudah terjual sebanyak " . $buah[1][2];

for ($baris = 0; $baris < 3; $baris++) {
    echo "<ul>";
    for ($kolom = 0; $kolom < 3; $kolom++) {
        echo "<li>" . $buah[$baris][$kolom] . "</li>";
    }
    echo "</ul>";
}
