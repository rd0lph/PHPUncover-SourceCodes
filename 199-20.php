<?php
$a = 100; // Variabel global $a dengan nilai awal 100

function test() {
    global $a; // Menggunakan global $a di dalam fungsi
    $a = 500; // Mengubah nilai variabel global $a menjadi 500
    echo "$a <br>"; // Menampilkan nilai variabel $a di dalam fungsi test()
}

echo "$a <br>"; // Menampilkan nilai variabel global $a sebelum memanggil fungsi test() (100)
test(); // Memanggil fungsi test() yang mengubah nilai variabel global $a menjadi 500
echo "$a <br>"; // Menampilkan nilai variabel global $a setelah pemanggilan fungsi test() (500)
?>
