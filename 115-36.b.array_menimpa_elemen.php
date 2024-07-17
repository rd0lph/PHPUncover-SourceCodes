<?php
    $macam2 = array(121, "Joko", 44.99, "Belajar PHP");

    $macam2[1] = "Localhost";
    $macam2[2] = 212;


    echo "<pre>";
    var_dump($macam2);
    echo "</pre>";

    // newitems 115.36.c
    $macam2[] = "Localhost";
     unset($macam2[0]);
     unset($macam2[2]);
     unset($macam2[3]);

    echo "<pre>";
    var_dump($macam2);
    echo "</pre>";
?>