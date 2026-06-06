<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../includes/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Star Wars - <? echo $activePage; ?></title>
</head>
<body class="pages">
    <nav class="navbar">
        <img src="../assets/starwars-logo.png" alt="Star Wars Logo" class="nav-logo">
        <div class="nav-menu">
            <a href="movies.php" class="<?php echo $activePage == 'Movies' ? 'active' : ''; ?>">Movies</a>
            <a href="characters.php" class="<?php echo $activePage == 'Characters' ? 'active' : ''; ?>">Characters</a>
            <a href="planets.php" class="<?php echo $activePage == 'Planets' ? 'active' : ''; ?>">Planets</a>
        </div>
        <div class="nav-search">
            <input type="text" placeholder="">
            <svg class="search-icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.75 15.75L12.4875 12.4875M14.25 8.25C14.25 11.5637 11.5637 14.25 8.25 14.25C4.93629 14.25 2.25 11.5637 2.25 8.25C2.25 4.93629 4.93629 2.25 8.25 2.25C11.5637 2.25 14.25 4.93629 14.25 8.25Z" stroke="#B3B3B3" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M33.3334 35V31.6667C33.3334 29.8986 32.631 28.2029 31.3808 26.9526C30.1305 25.7024 28.4349 25 26.6667 25H13.3334C11.5653 25 9.86961 25.7024 8.61937 26.9526C7.36913 28.2029 6.66675 29.8986 6.66675 31.6667V35M26.6667 11.6667C26.6667 15.3486 23.682 18.3333 20.0001 18.3333C16.3182 18.3333 13.3334 15.3486 13.3334 11.6667C13.3334 7.98477 16.3182 5 20.0001 5C23.682 5 26.6667 7.98477 26.6667 11.6667Z" stroke="#B3B3B3" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </nav>
    <!--<img src="../assets/page-bg.jpg" alt="Page Background" class="page-bg">-->