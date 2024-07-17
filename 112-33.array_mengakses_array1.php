<?php
    $siswa = array("Andri" , "joko", "Sukma", "Rina", "Sari");
    
    echo $siswa[2] . "</br>";
    echo "Murid itu bernama $siswa[0]" . "</br>";

    // newitems 113.33
    $macam2 = array(121, "Joko", 44.99, "Belajar PHP", true);
    $macam2[4] = "Localhost"; 
    $macam2[5] = 212;
    $macam2[6] = 22/7;
    
    echo "<pre>";
    var_dump($macam2);
    echo "</pre>";
?>