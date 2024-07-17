<?php
function tambah($satu, $dua) {
    $hasil = $satu + $dua;
    return $hasil;
}

echo tambah(5, 7); // Memanggil fungsi tambah() untuk menjumlahkan 5 dan 7, mencetak hasilnya (12)
echo "<br>";

echo "Hasil dari 6 + 9 adalah: " . tambah(6, 9); // Memanggil fungsi tambah() untuk menjumlahkan 6 dan 9, dan mencetak hasilnya dengan teks tambahan (15)
echo "<br>";

echo tambah(99, 1) . ", Bisa didapat dari 99 + 1"; // Memanggil fungsi tambah() untuk menjumlahkan 99 dan 1, mencetak hasilnya dengan teks tambahan (100)
?>
