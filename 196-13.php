<?php
function tambah($satu, $dua) {
    $hasil = $satu + $dua;
    return $hasil;
}

$a = tambah(6, 10); // Menggunakan fungsi tambah() untuk menjumlahkan 6 dan 10, hasilnya 16 disimpan dalam $a
$b = tambah($a, 9); // Menggunakan fungsi tambah() lagi dengan nilai $a (16) dan 9, hasilnya 25 disimpan dalam $b

echo $b; // Mencetak nilai $b, yang sekarang bernilai 25
?>
