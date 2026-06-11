<?php
include '../config/database.php';

$activePage = 'dashboard';
include '../includes/admin-nav.php';

// Hitung total data
$totalMovies = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM movies"));
$totalCharacters = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM characters"));
$totalPlanets = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM planets"));
$totalUsers = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users"));
?>

<div class="admin-content">

    <h2 class="dashboard-title">
        Statistik
    </h2>

    <div class="stats-container">

        <div class="stat-card">
            <p>🎬 Total Movies</p>
            <h3><?= $totalMovies; ?></h3>
        </div>

        <div class="stat-card">
            <p>👤 Total Characters</p>
            <h3><?= $totalCharacters; ?></h3>
        </div>

        <div class="stat-card">
            <p>🪐 Total Planets</p>
            <h3><?= $totalPlanets; ?></h3>
        </div>

        <div class="stat-card">
            <p>👥 Total Users</p>
            <h3><?= $totalUsers; ?></h3>
        </div>

    </div>


    <div class="dashboard-bottom">

        <div class="recent-section">

            <h2 class="dashboard-title">
                Recent Activity
            </h2>

            <div class="recent-card">

                <div class="activity-item">
                    <p>Admin menambahkan film Rogue One</p>
                    <span>2 menit lalu</span>
                </div>

                <div class="activity-item">
                    <p>Admin mengubah karakter Darth Vader</p>
                    <span>10 menit lalu</span>
                </div>

                <div class="activity-item">
                    <p>Admin menghapus planet Jakku</p>
                    <span>1 jam lalu</span>
                </div>

            </div>

        </div>


        <div class="quick-section">

            <h2 class="dashboard-title">
                Quick Actions
            </h2>

            <div class="quick-actions">

                <a href="tambah_movie.php" class="quick-btn">
                    + Add Movie
                </a>

                <a href="tambah_character.php" class="quick-btn">
                    + Add Characters
                </a>

                <a href="tambah_planet.php" class="quick-btn">
                    + Add Planet
                </a>

                <a href="users.php" class="quick-btn">
                    + Add Users
                </a>

            </div>

        </div>

    </div>

</div>