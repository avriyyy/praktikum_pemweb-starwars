
<?php
session_start();
require "../config/database.php";

$data = mysqli_query($conn,"SELECT * FROM movies");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Movie</title>
</head>
<body>

<h1>Data Movie</h1>

<a href="tambah_movie.php">
Tambah Movie
</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Year</th>
    <th>Rating</th>
    <th>Image</th>
    <th>Aksi</th>
</tr>

<?php while($row = mysqli_fetch_assoc($data)) : ?>

<tr>

<td><?= $row['id_movie']; ?></td>

<td><?= $row['title']; ?></td>

<td><?= $row['year']; ?></td>

<td><?= $row['rating']; ?></td>

<td>
<img
src="../assets/<?= $row['image']; ?>"
width="120">
</td>

<td>
<a href="edit_movie.php?id=<?= $row['id_movie']; ?>">
Edit
</a>

|

<a href="hapus_movie.php?id=<?= $row['id_movie']; ?>">
Hapus
</a>

</td>

</tr>

<?php endwhile; ?>

</table>

</body>
</html>

