<?php
$title = "Movies";
$activePage = "Movies";
include '../includes/navbar.php';
?>
<div>
    <h1 class="pages-title">Explore The Star Wars Galaxy</h1>
    <p class="pages-description">Discover movies, characters, and planets across the universe.</p>
    <button class="btn-movies">Explore Now</button>
</div>
<section class="section-movies">
    
    <h2 class="h2-title">Popular Movies</h2>
    
    <div class="movies-container">
        <div class="movie-card">
            <img src="../assets/movie1.jpg" alt="">
            <div class="movie-info">
                <h3>The Empire Strikes Back</h3>
                <p class="year">1980</p>
                <p class="rating">⭐ 8.7</p>
            </div>
        </div>

        <div class="movie-card">
            <img src="../assets/movie2.jpg" alt="">
            <div class="movie-info">
                <h3>Return of the Jedi</h3>
                <p class="year">1983</p>
                <p class="rating">⭐ 8.3</p>
            </div>
        </div>

        <div class="movie-card">
            <img src="../assets/movie3.jpg" alt="">
            <div class="movie-info">
                <h3>Revenge of the Sith</h3>
                <p class="year">2005</p>
                <p class="rating">⭐ 8.6</p>
            </div>
        </div>

        <div class="movie-card">
            <img src="../assets/movie4.jpg" alt="">
            <div class="movie-info">
                <h3>Roguo One</h3>
                <p class="year">2016</p>
                <p class="rating">⭐ 7.8</p>
            </div>
        </div>
    </div>
</section>

<?php
include '../includes/footer.php';
?>
