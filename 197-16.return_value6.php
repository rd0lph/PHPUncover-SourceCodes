<?php
function tambah_kurang($satu, $dua) {
    $hasil[] = $satu + $dua; // Menambahkan hasil penjumlahan ke dalam array $hasil
    $hasil[] = $satu - $dua; // Menambahkan hasil pengurangan ke dalam array $hasil
    return $hasil; // Mengembalikan array $hasil yang berisi hasil penjumlahan dan pengurangan
}

$a = tambah_kurang(100, 30); // Memanggil fungsi tambah_kurang() dengan parameter 100 dan 30, hasilnya disimpan dalam $a

echo "100 tambah 30 = " . $a[0]; // Menampilkan hasil penjumlahan dari array $a (130)
echo "<br>";
echo "100 kurang 30 = " . $a[1]; // Menampilkan hasil pengurangan dari array $a (70)
?>
