<?php
include '../includes/navbar.php';
?>

<section class="movie-detail">

    <div class="movie-cover">
        <img src="../assets/movie-poster.png" alt="">
    </div>

    <div class="movie-info">

        <div class="movie-poster">
            <img src="../assets/movie-poster.png" alt="">
        </div>

        <div class="movie-content">

            <h1>Revenge of the Sith</h1>

            <div class="movie-meta">
                ⭐ 8.6 • 2005 • Sci-Fi • 140 min
            </div>

            <div class="movie-buttons">
                <button class="btn-watch">Watch Trailer</button>
                <button class="btn-favorite">Add Favorite</button>
            </div>

            <p>
                Perang Klon mendekati akhir ketika Jedi Knight Anakin Skywalker mulai dihantui ketakutan
                kehilangan orang yang dicintainya. Manipulasi licik Chancellor Palpatine perlahan menarik Anakin
                ke sisi gelap Force dan membuatnya meragukan Jedi Order. Saat Republik runtuh dan
                Galactic Empire lahir, persahabatan antara Anakin dan Obi-Wan Kenobi berakhir dalam salah satu 
                pertarungan paling tragis dalam sejarah Star Wars.
            </p>

            <div class="movie-tags">
                <span>Sci-Fi</span>
                <span>Adventure</span>
                <span>Action</span>
            </div>

        </div>

    </div>

    <div class="section-block">

        <h2>Cast</h2>

        <div class="cast-grid">

            <div class="cast-card">
                <img src="../assets/anakin.jpg">
                <p>Anakin</p>
            </div>

            <div class="cast-card">
                <img src="../assets/obiwan.jpg">
                <p>Obi-Wan</p>
            </div>

            <div class="cast-card">
                <img src="../assets/yoda.jpg">
                <p>Yoda</p>
            </div>

            <div class="cast-card">
                <img src="../assets/padme.jpg">
                <p>Padmé</p>
            </div>

        </div>

    </div>

    <div class="section-block">

        <h2>Featured Planets</h2>

        <div class="planet-grid">

            <div class="planet-card">
                <img src="../assets/coruscant.png">
                <p>Coruscant</p>
            </div>

            <div class="planet-card">
                <img src="../assets/mustafar.png">
                <p>Mustafar</p>
            </div>

            <div class="planet-card">
                <img src="../assets/kashyyyk.png">
                <p>Kashyyyk</p>
            </div>

        </div>

    </div>

    <div class="section-block">

        <h2>Related Movies</h2>

        <div class="related-grid">

            <div class="related-card">
                <img src="../assets/movie1.jpg">
                <p>Return of the Jedi</p>
            </div>

            <div class="related-card">
                <img src="../assets/movie2.jpg">
                <p>The Empire Strikes Back</p>
            </div>

            <div class="related-card">
                <img src="../assets/movie3.jpg">
                <p>Revenge of the Sith</p>
            </div>

        </div>

    </div>

</section>

<?php include '../includes/footer.php'; ?>