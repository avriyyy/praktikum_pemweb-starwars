<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../auth/login.php");
    exit;
}

require "../config/database.php";

$title = "Movies";
$activePage = "Movies";

include "../includes/navbar.php";

$data = mysqli_query($conn, "SELECT * FROM movies");
?>

<section class="section-movies">

    <h2 class="section-title">Movie Section</h2>

    <div class="movies-container">

        <?php while($row = mysqli_fetch_assoc($data)) : ?>

            <div class="movie-card">

                <a href="../pages/detailMovie.php?id=<?= $row['id_movie']; ?>">
                    <img 
                        src="../assets/<?php echo $row['image']; ?>"
                        alt="">
                </a>
                <div class="movie-info">

                    <h3>
                        <?php echo $row['title']; ?>
                    </h3>

                    <p class="year">
                        <?php echo $row['year']; ?>
                    </p>

                    <p class="rating">
                        ⭐ <?php echo $row['rating']; ?>
                    </p>

                </div>

            </div>

        <?php endwhile; ?>

    </div>

</section>

<?php
include "../includes/footer.php";
?>