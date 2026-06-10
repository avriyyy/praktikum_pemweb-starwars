
<?php
session_start();
require "../config/database.php";

if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $year = $_POST['year'];
    $rating = $_POST['rating'];
    $image = $_POST['image'];

    mysqli_query(
        $conn,
        "INSERT INTO movies
        (title, year, rating, image)
        VALUES
        ('$title','$year','$rating','$image')"
    );

    echo "
    <script>
    alert('Movie berhasil ditambahkan!');
    document.location.href='movies.php';
    </script>
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah Movie</title>
</head>
<body>

<h1>Tambah Movie</h1>

<form method="POST">

Title

<br><br>

<input type="text" name="title" required>

<br><br>

Year

<br><br>

<input type="number" name="year">

<br><br>

Rating

<br><br>

<input type="text" name="rating">

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

