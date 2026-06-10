
<?php
require "../config/database.php";

$id = $_GET['id'];

mysqli_query(
    $conn,
    "DELETE FROM movies
    WHERE id_movie=$id"
);

echo "
<script>
alert('Movie berhasil dihapus!');
document.location.href='movies.php';
</script>
";
?>

