<?php
function tambah($satu, $dua) {
    $hasil = $satu + $dua;
    return $hasil;
}

$a = tambah(6, 10); // Memanggil fungsi tambah() dengan argumen 6 dan 10, dan menyimpan hasilnya ke dalam $a
echo $a; // Mencetak nilai $a, yang seharusnya 16
?>
