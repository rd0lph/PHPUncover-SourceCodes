<?php
function coba() {
    static $a = 0; // Deklarasi variabel statis $a untuk menyimpan nilai antar pemanggilan
    $a = $a + 1; // Menambahkan 1 ke variabel $a
    return "Ini adalah pemanggilan ke-$a fungsi coba() <br />";
}

echo coba(); // Ini adalah pemanggilan ke-1 fungsi coba()
echo coba(); // Ini adalah pemanggilan ke-2 fungsi coba()
echo coba(); // Ini adalah pemanggilan ke-3 fungsi coba()
echo coba(); // Ini adalah pemanggilan ke-4 fungsi coba()
?>
