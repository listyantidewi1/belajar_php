<?php
$penghitung = 1; //bertugas utk menghitung banyak ulangan

//while -  mengulang blok kode program selama kondisi terpenuhi
echo "<h2>Perulangan While</h2>";
while ($penghitung <= 10) {
    echo "Hitungan ke: $penghitung <br />";
    $penghitung++;
}

$penghitung2 = 0;

//do...while - mengeksekusi blok kode program sekali, lalu mengulanginya selama kondisi terpenuhi
echo "<br /><h2>Perulangan do..while</h2>";
do {
    echo "Hitungan ke: $penghitung2 <br />";
    $penghitung2++;
} while ($penghitung2 <= 4);

//for - mengulang blok kode program sebanyak jumlah yang ditentukan
echo "<br/> <h2>Perulangan For</h2>";
for ($y = 1; $y <= 20; $y++) {
    echo "Hitungan ke $y <br/>";
}


//foreach - mengulang blok kode program sebanyak jumlah elemen himpunan
echo "<br /><h2>Perulangan Foreach</h2>";
$mobil = array("avanza", "xenia", "alphard", "agya", "ayla");

foreach ($mobil as $nilai) {
    echo "$nilai <br />";
}

echo "<br/>";
$tinggiBadan = array("Figo" => "170", "Amanda" => "165", "Reva" => "168");

foreach ($tinggiBadan as $tinggi => $nilai) {
    echo "$tinggi = $nilai<br/>";
}
