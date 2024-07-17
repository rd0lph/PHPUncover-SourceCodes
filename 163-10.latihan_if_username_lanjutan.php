<?php
$username = "admin";
$password = "qwerty";

if ($username == "admin" && $password == "qwerty") {
    echo "Nama dan password sesuai, hak akses diberikan..";
} elseif ($username == "admin" && $password != "qwerty") {
    echo "Nama sesuai, password tidak sesuai!";
} elseif ($username != "admin" && $password == "qwerty") {
    echo "Nama tidak sesuai, password sesuai!";
} else {
    echo "Nama dan password tidak sesuai!";
}
?>
