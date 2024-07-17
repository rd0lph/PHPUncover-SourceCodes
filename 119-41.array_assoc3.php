<?php
    $assoc = [ "satu" => 10000, "dua" => "Localhost", 4 => "Belajar PHP", 1000 => "Jadi Programmer"];

    $assoc["baru"] = "Data Baru";
    $assoc[99] = "Sembila Puluh Sembilan";

    $assoc[] = "Ini akan pakai index berapa?";
    $assoc[] = 123456;

    echo "<pre>";
    print_r($assoc);
    echo "</pre>";
?>