<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../auth/login.php");
    exit;
}

require "../config/database.php";

$title = "Planets";
$activePage = "Planets";

include "../includes/navbar.php";

$data = mysqli_query($conn, "SELECT * FROM planets");
?>

<section class="section-planets">

    <h2 class="section-title">
        Planet Section
    </h2>

    <div class="planets-container">

        <?php while($row = mysqli_fetch_assoc($data)) : ?>

            <div class="planet-card">

                <img
                    src="../assets/<?php echo $row['image']; ?>"
                    alt="">

                <p>
                    <?php echo $row['name']; ?>
                </p>

            </div>

        <?php endwhile; ?>

    </div>

</section>

<?php
include "../includes/footer.php";
?>