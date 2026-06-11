<?php
include '../includes/navbar.php';
?>

<section class="character-detail">

    <div class="character-banner">
        <img src="../assets/yoda-banner.jpg" alt="Yoda">
    </div>

    <div class="character-info">

        <div class="character-image">
            <img src="../assets/char-yoda.jpg" alt="Yoda">
        </div>

        <div class="character-content">

            <h1>YODA</h1>

            <div class="character-meta">
                <p><strong>Species :</strong> Yoda's Species</p>
                <p><strong>Affiliation :</strong> Jedi Order</p>
                <p><strong>Home Planet :</strong> Unknown</p>
                <p><strong>Weapon :</strong> Green Lightsaber</p>
            </div>

            <h2>Biography</h2>

            <p class="biography">
                Yoda adalah Grand Master Jedi dan salah satu pengguna Force
                paling kuat dalam sejarah galaksi. Selama lebih dari 800 tahun,
                ia membimbing generasi demi generasi Jedi dan menjadi simbol
                kebijaksanaan, kedisiplinan, serta keseimbangan dalam Force.
                Ketika Clone Wars terjadi dan Galactic Republic runtuh,
                Yoda berusaha mempertahankan Jedi Order dari ancaman Sith yang
                dipimpin Darth Sidious.
            </p>

        </div>

    </div>
    
    <div class="related-section">

        <h2>Related Movies</h2>

        <div class="related-grid">

            <div class="related-card">
                <img src="../assets/movie1.jpg">
                <p>The Phantom Menace</p>
            </div>

            <div class="related-card">
                <img src="../assets/movie2.jpg">
                <p>Attack of the Clones</p>
            </div>

            <div class="related-card">
                <img src="../assets/movie3.jpg">
                <p>The Empire Strikes Back</p>
            </div>

            <div class="related-card">
                <img src="../assets/movie4.jpg">
                <p>Revenge of the Sith</p>
            </div>

        </div>

    </div>

</section>

<?php
include '../includes/footer.php';
?>