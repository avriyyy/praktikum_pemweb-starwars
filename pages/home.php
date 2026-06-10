<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../auth/login.php");
    exit;
}

include "../includes/navbar.php";
?>

<section class="hero">

    <div class="hero-content">
        <h1>Explore The Star Wars Galaxy</h1>

        <p>
            Discover movies, characters, and planets across the universe.
        </p>

        <button>Explore Now</button>
    </div>

</section>

<section class="movies">

    <div class="movies-content">
        <h1>MOVIES</h1>

        <p>
            Jelajahi kisah epik Star Wars dari trilogi klasik,
            prequel, hingga era modern.
            <br><br>
            Temukan perjalanan Luke Skywalker,
            Anakin Skywalker, dan para Jedi dalam
            pertempuran melawan sisi gelap Force.
        </p>

        <button>VIEW ALL MOVIES</button>
    </div>

</section>

<section class="characters">

    <div class="characters-content">
        <h1>CHARACTERS</h1>

        <p>
            Kenali para tokoh ikonik yang membentuk sejarah galaksi, mulai dari Jedi, Sith, hingga para penyelundup dan pemimpin pemberontakan.
        </p>

        <button>VIEW ALL CHARACTERS</button>
    </div>

</section>

<section class="planets">

    <div class="planets-content">
        <h1>PLANETS</h1>

        <p>
            Jelajahi dunia-dunia unik dalam galaksi Star Wars, dari gurun Tatooine hingga kota futuristik Coruscant.
        </p>

        <button>VIEW ALL PLANETS</button>
    </div>

</section>

<?php
include "../includes/footer.php";
?>