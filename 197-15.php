<?php
function tambah($satu, $dua) {
    $hasil = $satu + $dua;
    return $hasil;
    echo "Kalimat ini tidak akan pernah dijalankan..."; // Perintah ini tidak akan dijalankan
}

echo tambah(5, 7); // Memanggil fungsi tambah() untuk menjumlahkan 5 dan 7, mencetak hasilnya (12)
?>
