
<?php
session_start();
require "../config/database.php";

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM planets WHERE id_planet=$id");
$row = mysqli_fetch_assoc($data);

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    mysqli_query(
        $conn,
        "UPDATE planets SET
        name='$name',
        description='$description',
        image='$image'
        WHERE id_planet=$id"
    );

    echo "
    <script>
    alert('Planet berhasil diupdate!');
    document.location.href='planets.php';
    </script>
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Planet</title>
</head>
<body>

<h1>Edit Planet</h1>

<form method="POST">

Nama Planet

<br><br>

<input
type="text"
name="name"
value="<?= $row['name']; ?>"
required>

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

