<?php
$page = $_GET['page'] ?? 'login';

switch ($page) {
    case 'movies':
        $activePage = 'Movies';
        include 'includes/navbar.php';
        include 'pages/movies.php';
        include 'includes/footer.php';
        break;
    case 'characters':
        $activePage = 'Characters';
        include 'includes/navbar.php';
        include 'pages/characters.php';
        include 'includes/footer.php';
        break;
    case 'planets':
        $activePage = 'Planets';
        include 'includes/navbar.php';
        include 'pages/planets.php';
        include 'includes/footer.php';
        break;
    case 'register':
        include 'auth/register.php';
        break;
    default:
        include 'auth/login.php';
        break;
}
?>