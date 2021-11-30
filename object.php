<?php
class Car
{ //membuat class baru
    //property dari class
    public $warna;
    public $model;

    //konstruktor: bagian dari class yg mengkonstruksi object
    public function __construct($warna, $model)
    {
        //menyalin nilai $warna dari argumen konstruktor ke $warna di class
        $this->warna = $warna;
        //menyalin nilai $model dari argumen konstruktor ke $model di class
        $this->model = $model;
    }

    //method: fungsi utk mengeksekusi sebuah blok program
    public function pesan()
    {
        return "Mobilku adalah " . $this->model . " dengan warna " . $this->warna;
    }
}

//membuat object mobil1 dan mobil2
$mobil1 = new Car("hitam", "daihatsu xenia");
echo $mobil1->pesan();
echo "<br />";

$mobil2 = new Car("merah", "ayla");
echo $mobil2->pesan();
echo "<br />";
