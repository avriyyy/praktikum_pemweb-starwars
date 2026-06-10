<?php
$activePage = 'dashboard';
include '../includes/admin-nav.php';
?>
<div class="admin-content">

    <h2 class="dashboard-title">
        Statistik
    </h2>

    <div class="stats-container">

        <div class="stat-card">
            <p>🎬 Total Movies</p>
            <h3>8</h3>
        </div>

        <div class="stat-card">
            <p>👤 Total Characters</p>
            <h3>16</h3>
        </div>

        <div class="stat-card">
            <p>🪐 Total Planets</p>
            <h3>6</h3>
        </div>

        <div class="stat-card">
            <p>👥 Total Users</p>
            <h3>8</h3>
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

                <a href="add-movie.php" class="quick-btn">
                    + Add Movie
                </a>

                <a href="add-character.php" class="quick-btn">
                    + Add Characters
                </a>

                <a href="add-planet.php" class="quick-btn">
                    + Add Planet
                </a>

                <a href="add-user.php" class="quick-btn">
                    + Add Users
                </a>

            </div>

        </div>

    </div>

</div>