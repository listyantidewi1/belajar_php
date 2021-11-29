<?php
//membuat variabel global
$var1 = "Hello World";
$var2 = 89;
$var3 = 89.87;

//menampilkan variabel
echo ("Nilai dari var1 adalah " . $var1 . "<br />");
echo ("Nilai dari var2 adalah " . $var2 . "<br />");
echo ("Nilai dari var3 adalah " . $var3 . "<br />");
echo ("Nilai dari var1 adalah $var1 <br />");
echo ("Nilai dari var2 adalah $var2 <br />");
echo ("Nilai dari var3 adalah $var3 <br />");
echo "Penjumlahan dari $var2 dan $var3 adalah " . $var2 + $var3 . "<br />";

//membuat fungsi
function ujiVariableScope()
{
    //menampilkan nilai variabel dari dalam function
    echo "Nilai dari var1 dari dalam fungsi ujiaVariableScope adalah $var1 <br />";
    //kode program di atas akan menghasilkan error, karena memanggil variabel global dari dalam function
    echo "Nilai dari var4 dari dalam fungsi ujiVariableScope adalah $var4 <br />";
    //kode program di atas akan menghasilkan error, karena memanggil variabel local dari fungsi lain
}

ujiVariableScope(); //memanggil fungsi ujiVariableScope

//menampilkan nilai variabel dari luar function
echo "Nilai dari var1 dari luar fungsi ujiVariableScope adalah $var1 <br />";

//membuat fungsi 2
function ujiVariableLocal()
{
    $var4 = 90; //variabel local, dikenali dari dalam fungsi ujiVariableLocal
    echo "Nilai dari var4 dari dalam fungsi ujiVariableLocal adalah $var4 <br />";
}

ujiVariableLocal(); //memanggil fungsi ujiVariableLocal

echo "Nilai dari var4 dari luar fungsi ujiVariableLocal adalah $var4 <br />"; //variabel local, tidak dapat dipanggil dari luar fungsi

//membuat fungsi untuk berlatih kata kunci global
function berlatihKeywordGlobal()
{
    global $var2, $var3; //kata kunci global, membuat var2 dan var3 dikenali dari dalam fungsi
    $var3 = $var2 + $var3; //menjumlahkan var2 dan var3, hasilnya disimpan di var3
}
//memanggil fungsi berlatihKeywordGlobal
berlatihKeywordGlobal();
echo "Hasil penjumlahan var2 dan var3 dari dalam fungsi, menggunakan kata kunci global adalah $var3 <br />";
