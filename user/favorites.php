<?php
include "../includes/navbar.php"; ?>
<img src="../assets/profile-bg.jpg" alt="Profile Background" class="profile-bg">
<section class="favorite-movies">

    <h1 class="favorite-title">Favorite Movies</h1>

    <div class="favorite-container">

        <!-- Item -->
        <div class="favorite-item">

            <img src="../assets/movie1.jpg" alt="Movie Poster">

            <div class="favorite-info">
                <h2>Return of the Jedi</h2>

                <p>1983 • Sci-Fi • 131 min</p>

                <div class="rating">
                    ⭐ 8.3
                </div>
            </div>

            <div class="favorite-actions">
                <a href="../pages/detailMovie.php?id=1" class="btn-detail">Lihat detail</a>
                <a href="#"
                   class="delete-btn favorite-delete">
                    Delete
                </a>
            </div>

        </div>

    </div>

</section>

<div class="confirm-overlay" id="confirmOverlay">

    <div class="confirm-box">

        <div class="confirm-icon">
            !
        </div>

        <p class="confirm-text">
            Anda yakin akan menghapus<br>
            movie ini dari favorite?
        </p>

        <div class="confirm-actions">

            <button class="confirm-yes" id="confirmYes">
                Ya
            </button>

            <button class="confirm-no" id="confirmNo">
                Tidak
            </button>

        </div>

    </div>

</div>

<script>
    const confirmOverlay = document.getElementById('confirmOverlay');

    const confirmYes = document.getElementById('confirmYes');

    const confirmNo = document.getElementById('confirmNo');

    let deleteTarget = null;

    document.querySelectorAll('.favorite-delete').forEach(button => {

        button.addEventListener('click', function(e) {

            e.preventDefault();

            deleteTarget = this;

            confirmOverlay.classList.add('show');

        });

    });

    confirmNo.addEventListener('click', () => {

        confirmOverlay.classList.remove('show');

        deleteTarget = null;

    });

    confirmYes.addEventListener('click', () => {

        confirmOverlay.classList.remove('show');

        if (deleteTarget) {

            /*
            Kalau pakai database:
            window.location.href = deleteTarget.href;
            */

            deleteTarget.closest('.favorite-item').remove();

            deleteTarget = null;
        }

    });

    confirmOverlay.addEventListener('click', (e) => {

        if (e.target === confirmOverlay) {

            confirmOverlay.classList.remove('show');

            deleteTarget = null;
        }

    });
</script>