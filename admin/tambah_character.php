<?php
session_start();
require "../config/database.php";

if (!isset($_SESSION['login'])) {
    header("Location: ../auth/login.php");
    exit;
}

if ($_SESSION['role'] != 'admin') {
    echo "Halaman ini hanya untuk admin!";
    exit;
}

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    mysqli_query(
        $conn,
        "INSERT INTO characters (name, description, image)
        VALUES ('$name', '$description', '$image')"
    );

    echo "
    <script>
        alert('Character berhasil ditambahkan!');
        document.location.href='characters.php';
    </script>
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Character</title>
</head>
<body>

<h1>Tambah Character</h1>

<form method="POST">

Nama Character

<br><br>

<input type="text" name="name" required>

<br><br>

Deskripsi

<br><br>

<textarea name="description"></textarea>

<br><br>

Nama Gambar

<br><br>

<input type="text" name="image">

<br><br>

<button type="submit" name="submit">
Tambah
</button>

</form>

</body>
</html>

