<?php
$a = 100; // Variabel $a di luar fungsi, nilai awalnya adalah 100

function test() {
    $a = 500; // Variabel $a di dalam fungsi test(), nilai localnya adalah 500
    echo "$a <br>"; // Menampilkan nilai variabel $a di dalam fungsi test()
}

echo "$a <br>"; // Menampilkan nilai variabel $a di luar fungsi (100)
test(); // Memanggil fungsi test()
echo "$a <br>"; // Menampilkan nilai variabel $a di luar fungsi setelah pemanggilan fungsi test() (100)
?>
