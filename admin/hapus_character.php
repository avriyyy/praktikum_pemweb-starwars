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

mysqli_query(
    $conn,
    "DELETE FROM characters
    WHERE id_character = $id"
);

echo "
<script>
alert('Character berhasil dihapus!');
document.location.href='characters.php';
</script>
";
?>