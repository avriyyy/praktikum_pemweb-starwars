
<?php
require "../config/database.php";

$id = $_GET['id'];

mysqli_query(
    $conn,
    "DELETE FROM planets
    WHERE id_planet=$id"
);

echo "
<script>
alert('Planet berhasil dihapus!');
document.location.href='planets.php';
</script>
";
?>

