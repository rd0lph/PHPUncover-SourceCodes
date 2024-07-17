<?php
    $macam2 = array(121, "Joko", 44.99, "Belajar PHP", true);

    foreach($macam2 as $items){
        echo $items . "</br>";
    }

    //newitems 114.34
    $macam2[] = "Localhost";
    $macam2[] = 212;
    $macam2[] = 22/7;

    var_dump($macam2);
?>