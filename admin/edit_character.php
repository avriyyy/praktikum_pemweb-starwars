<?php
session_start();
require "../config/database.php";

if(!isset($_SESSION['login'])){
    header("Location: ../auth/login.php");
    exit;
}

if($_SESSION['role'] != 'admin'){
    echo "Halaman ini hanya untuk admin!";
    exit;
}

$id = $_GET['id'];

$data = mysqli_query(
    $conn,
    "SELECT * FROM characters
    WHERE id_character = $id"
);

$row = mysqli_fetch_assoc($data);

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    mysqli_query(
        $conn,
        "UPDATE characters SET
        name='$name',
        description='$description',
        image='$image'
        WHERE id_character=$id"
    );

    echo "
    <script>
    alert('Character berhasil diubah!');
    document.location.href='characters.php';
    </script>
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Character</title>
</head>
<body>

<h1>Edit Character</h1>

<form method="POST">

Nama Character

<br><br>

<input
type="text"
name="name"
value="<?= $row['name']; ?>">

<br><br>

Deskripsi

<br><br>

<textarea name="description"><?= $row['description']; ?></textarea>

<br><br>

Nama Gambar

<br><br>

<input
type="text"
name="image"
value="<?= $row['image']; ?>">

<br><br>

<button type="submit" name="submit">
Update
</button>

</form>

</body>
</html>