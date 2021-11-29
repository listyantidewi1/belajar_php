<?php

//membuat variabel dengan tipe String
$txt1 = "Abcde12345@#%*";
//String bisa memuat seluruh karakter dalam keyboard

echo "Variabel txt1 bernilai $txt1 <br />"; //menampilkan nilai dari variable $txt1
var_dump($txt1); //var_dump digunakan utk menampilkan informasi terkait sebuah variabel: tipe data, panjang, nilai

echo "<br /><h1>Menghtiung jumlah karakter dengan strlen</h1>";
//strlen digunakan untuk menghitung panjang string (jumlah karakter dalam sebuah string, termasuk spasi)
echo strlen("Hallo, saya dewi! Senang bertemu dengan Anda");
$txt2 = "lorem ipsum dolor sit amet, consectetur adipiscing"; //string $txt2
echo "<br />";
echo strlen($txt2); //menampilkan panjang string $txt2

//str_word_count() digunakan untuk menghitung jumlah kata
echo "<br /><h1>Menghitung jumlah kata dengan str_word_count</h1>";
echo str_word_count($txt2);


//strrev() digunak untuk membalik kata (string reverse)
echo "<br /><h1>Membalik kalimat dengan strrev</h1>";
echo strrev($txt2);

//Mencari posisi sebuah teks dalam kalimat
echo "<br /><h1>Mencari posisi sebuah teks dalam kalimat</h1>";
echo strpos($txt2, "amet");

//Mengganti karakter pada teks dengan str_replace
echo "<br /><h1>Mengganti karakter pada teks dengan str_replace</h1>";
echo str_replace("a", "i", "Balonku ada lima");
