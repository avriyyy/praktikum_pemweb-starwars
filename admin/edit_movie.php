
<?php
session_start();
require "../config/database.php";

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM movies WHERE id_movie=$id");
$row = mysqli_fetch_assoc($data);

if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $year = $_POST['year'];
    $rating = $_POST['rating'];
    $image = $_POST['image'];

    mysqli_query(
        $conn,
        "UPDATE movies SET
        title='$title',
        year='$year',
        rating='$rating',
        image='$image'
        WHERE id_movie=$id"
    );

    echo "
    <script>
    alert('Movie berhasil diupdate!');
    document.location.href='movies.php';
    </script>
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Movie</title>
</head>
<body>

<h1>Edit Movie</h1>

<form method="POST">

Title

<br><br>

<input
type="text"
name="title"
value="<?= $row['title']; ?>"
required>

<br><br>

Year

<br><br>

<input
type="number"
name="year"
value="<?= $row['year']; ?>">

<br><br>

Rating

<br><br>

<input
type="text"
name="rating"
value="<?= $row['rating']; ?>">

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

