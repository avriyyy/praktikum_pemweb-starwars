<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../auth/login.php");
    exit;
}

require "../config/database.php";

$title = "Characters";
$activePage = "Characters";

include "../includes/navbar.php";

$data = mysqli_query($conn, "SELECT * FROM characters");
?>

<section class="section-characters">

    <h2 class="section-title">Character Section</h2>

    <div class="characters-container">

        <?php while($row = mysqli_fetch_assoc($data)) : ?>

            <div class="character-card">

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