<?php

//Integer atau bilangan bulat
//membuat variabel bertipe integer
$num1 = 78;
echo "Apakah $num1 integer? :";
var_dump(is_int($num1)); //untuk memeriksa tipe data apakah integer atau bukan
echo "<br />";
var_dump($num1);

$num2 = 76.896;
echo "<br />";
echo "Apakah $num2 integer? :";
var_dump(is_int($num2));
echo "<br />";
var_dump($num2);

//membuat variable float
$num3 = 616.897687;
echo "<br />";
echo "Apakah $num3 float? :";
var_dump(is_float($num2)); //untuk memeriksa tipe data apakah float atau bukan
echo "<br />";
var_dump($num3);

//Casting - merubah tipe data
//Merubah float ke integer
$var1 = 86753.5443; //float
$int_cast_var1 = (int)$var1; //var1 diubah ke integer
echo "<br />Hasil perubahan $var1 ke integer adalah $int_cast_var1";

//Merubah string ke integer
$var2 = "1232.86753"; //string
$int_cast_var2 = (int)$var2;
echo "<br />Hasil perubahan string $var2 ke integer adalah $int_cast_var2";
