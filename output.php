<!DOCTYPE html>
<html>

<head>
    <title>PHP Output</title>
</head>

<body>
    <?php

    echo "<p>Kode program yang ditulis dalam bahasa PHP memungkinkan elemen-elemen di dalamnya untuk dimanipulasi secara otomatis ataupun dengan menggunakan action tertentu (klik, reload, hover, dsb)</p>";
    //Ini bagian output dengan menggunakan echo
    echo "Hello world pakai echo <br />";
    print "Hello world pakai print";

    echo "<h1>Ini Judul</h1>";
    echo "<h2>Tabel di bawah ini dibuat dengan PHP</h2>";
    echo "<table border=1>";
    echo "<tr><th>NO</th><th>Nama</th></tr>";
    echo "<tr><td>1</td><td>Santi</td></tr>";
    echo "</table>";

    //Ini bagian variabel
    echo "<h2>Menampilkan Nilai Variabel</h2>";
    $i = 225; //membuat variabel dengan nama i bernilai 189.7
    $j = 8000.897; //jika nilai dari variabel berupa angka / numberik, maka tidak perlu tanda kutip
    $s = "String 1"; //jika nilai dari variabel itu adalh teks / string maka harus menggunakan tanda kutip

    //variabel itu case sensitive (besar kecilnya huruf berpengaruh)
    $warna = "hitam";
    $WARNA = "kuning";
    $Warna = "pink";

    echo ("Nilai variabel i adalah " . $i . " dan variabel j adalah " . $j . " dan variabel s adalah " . $s);

    echo ("<br>Motorku warnanya " . $warna . " tembokku warnanya " . $WARNA . " bajuku warnanya " . $Warna);
    echo ("<br />Nilai " . $j . " dibagi nilai " . $i . " adalah " . $j / $i);

    ?>
    <h1>Heading ini di luar PHP</h1>
    <p>Kode program yang ditulis dalam HTML bersifat statis (tetap) dan tidak bisa dimanipulasi</p>
    <table border="1" cellspacing="0" cellpadding="1">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
        </tr>
        <tr>
            <th>101</th>
            <th>Sinta</th>
        </tr>
    </table>

    <?php
    echo "<br>ini PHP lain setelah kode HTML";
    ?>

</body>

</html>