<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "NAYLAMYSQL",
    "starwars_db"
);

if (!$conn) {
    die("Koneksi database gagal : " . mysqli_connect_error());
}

?>