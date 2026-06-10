```php
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

$data = mysqli_query($conn, "SELECT * FROM characters");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kelola Character</title>
</head>
<body>

<h1>Data Character</h1>

<a href="tambah_character.php">
    Tambah Character
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

    <td><?= $row['id_character']; ?></td>

    <td><?= $row['name']; ?></td>

    <td><?= $row['description']; ?></td>

    <td>
        <img src="../assets/<?= $row['image']; ?>" width="100">
    </td>

    <td>

        <a href="edit_character.php?id=<?= $row['id_character']; ?>">
            Edit
        </a>

        |

        <a
        href="hapus_character.php?id=<?= $row['id_character']; ?>"
        onclick="return confirm('Yakin ingin menghapus character ini?');">

            Hapus

        </a>

    </td>

</tr>

<?php endwhile; ?>

</table>

</body>
</html>
```
