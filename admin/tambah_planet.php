
<?php
session_start();
require "../config/database.php";

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    mysqli_query(
        $conn,
        "INSERT INTO planets
        (name,description,image)
        VALUES
        ('$name','$description','$image')"
    );

    echo "
    <script>
    alert('Planet berhasil ditambahkan!');
    document.location.href='planets.php';
    </script>
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah Planet</title>
</head>
<body>

<h1>Tambah Planet</h1>

<form method="POST">

Nama Planet

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

