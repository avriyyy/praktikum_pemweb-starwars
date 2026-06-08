<?php
$title = "Characters";
$activePage = "Characters";
include '../includes/navbar.php';
?>
<section class="section-characters">
    <h2 class="section-title">Character Section</h2>

    <div class="characters-container">

        <div class="character-card">
            <a href="detailCharacter.php"><img src="../assets/character1.png" alt="Darth Vader"></a>
            <p>Darth Vader</p>
        </div>

        <div class="character-card">
            <img src="../assets/character2.png" alt="Luke Skywalker">
            <p>Luke Skywalker</p>
        </div>

        <div class="character-card">
            <img src="../assets/character3.png" alt="Yoda">
            <p>Yoda</p>
        </div>

        <div class="character-card">
            <img src="../assets/character4.png" alt="Obi-Wan Kenobi">
            <p>Obi-Wan Kenobi</p>
        </div>

    </div>
</section>

<?php
include '../includes/footer.php';
?>
