<?php
function coba() {
    $a = 0; // Inisialisasi variabel lokal $a dengan nilai 0 setiap kali fungsi dipanggil
    $a = $a + 1; // Menambahkan 1 ke variabel $a
    return "Ini adalah pemanggilan ke-$a fungsi coba() <br />";
}

echo coba(); // Ini adalah pemanggilan ke-1 fungsi coba()
echo coba(); // Ini adalah pemanggilan ke-1 fungsi coba()
echo coba(); // Ini adalah pemanggilan ke-1 fungsi coba()
echo coba(); // Ini adalah pemanggilan ke-1 fungsi coba()
?>
