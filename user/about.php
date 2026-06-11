<?php
$activePage = 'About';
include '../includes/navbar.php';
?>

<section class="about-page">

    <div class="about-header">
        <h1>About Star Wars Database</h1>
        <p>Explore the galaxy far, far away.</p>
    </div>

    <img src="../assets/vader.png" alt="Darth Vader" class="about-vader">

    <div class="about-card">

        <div class="about-section">
            <h2>About project</h2>

            <div class="about-box">
                <p>
                    Star Wars Database adalah platform yang dirancang untuk membantu
                    penggemar Star Wars menjelajahi informasi mengenai film,
                    karakter, dan planet yang ada di dalam galaksi Star Wars.
                    Website ini menyediakan informasi yang mudah diakses melalui
                    tampilan modern dan interaktif.
                </p>
            </div>
        </div>

        <div class="about-grid">

            <div class="about-column">

                <h2>Main Features</h2>

                <div class="about-box">
                    <ul>
                        <li>🎬 Browse Star Wars Movies</li>
                        <li>👤 Explore Characters</li>
                        <li>🪐 Discover Planets</li>
                        <li>⭐ Save Favorites</li>
                        <li>🔍 Search Content</li>
                        <li>⚙️ Admin Management System</li>
                    </ul>
                </div>

            </div>

            <div class="about-column">

                <h2>Technologies Used</h2>

                <div class="about-box">
                    <p>UI Design : Figma</p>
                    <p>Frontend : HTML, CSS, JavaScript</p>
                    <p>Backend : PHP</p>
                    <p>Database : MySQL</p>
                </div>

            </div>

        </div>

        <div class="team-section">

            <h2>Development Team</h2>

            <div class="team-grid">

                <div class="team-card">
                    <span>Project Leader</span>
                    <strong>Nayla</strong>
                </div>

                <div class="team-card">
                    <span>UI/UX Designer</span>
                    <strong>Wisnu</strong>
                </div>

                <div class="team-card">
                    <span>Frontend Developer</span>
                    <strong>Yudha</strong>
                </div>

                <div class="team-card">
                    <span>Frontend Developer</span>
                    <strong>Nayla</strong>
                </div>

            </div>

        </div>

    </div>

</section>

<?php include '../includes/footer.php'; ?>