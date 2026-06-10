
<?php
session_start();
require "../config/database.php";

$data = mysqli_query($conn,"SELECT * FROM planets");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Planet</title>
</head>
<body>

<h1>Data Planet</h1>

<a href="tambah_planet.php">
Tambah Planet
</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Deskripsi</th>
    <th>Image</th>
    <th>Aksi</th>
</tr>

<?php while($row = mysqli_fetch_assoc($data)) : ?>

<tr>

<td><?= $row['id_planet']; ?></td>

<td><?= $row['name']; ?></td>

<td><?= $row['description']; ?></td>

<td>
<img src="../assets/<?= $row['image']; ?>" width="150">
</td>

<td>

<a href="edit_planet.php?id=<?= $row['id_planet']; ?>">
Edit
</a>

|

<a href="hapus_planet.php?id=<?= $row['id_planet']; ?>">
Hapus
</a>

</td>

</tr>

<?php endwhile; ?>

</table>

</body>
</html>

