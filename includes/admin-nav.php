<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../includes/style.css">
</head>
<body class="admin-body">
<div class="sidebar">

    <img
        src="../assets/starwars-logo.png"
        alt="Star Wars"
        class="sidebar-logo">

    <nav class="sidebar-menu">

        <a href="../admin/dashboard.php"
           class="<?= $activePage == "dashboard" ? "active" : "" ?>">
            Dashboard
        </a>

        <a href="../admin/movies.php"
           class="<?= $activePage == "movies" ? "active" : "" ?>">
            Movies
        </a>

        <a href="../admin/characters.php"
           class="<?= $activePage == "characters" ? "active" : "" ?>">
            Characters
        </a>

        <a href="../admin/planets.php"
           class="<?= $activePage == "planets" ? "active" : "" ?>">
            Planets
        </a>

        <a href="../admin/users.php"
           class="<?= $activePage == "users" ? "active" : "" ?>">
            Users
        </a>

        <a href="../admin/settings.php"
           class="<?= $activePage == "settings" ? "active" : "" ?>">
            Settings
        </a>

    </nav>

    <a href="../auth/logout.php" class="logout-btn">
        Logout
    </a>

</div>

<div class="top-navbar">

    <h1 class="admin-nav-title">
        Admin Dashboard
    </h1>

    <div class="profile-dropdown">
        <button class="profile-btn">
            <img src="../assets/admin-logo.png" alt="Admin Profile">
        </button>

    </div>

</div>
