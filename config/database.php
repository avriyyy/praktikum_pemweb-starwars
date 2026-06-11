<?php

$conn = mysqli_connect(
    "43.134.3.156",
    "starwars",
    "starwars",
    "starwars",
    3306
);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}