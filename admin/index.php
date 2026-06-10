<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../auth/login.php");
    exit;
}

if($_SESSION['role'] != 'admin'){
    echo "Halaman ini hanya untuk admin!";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard Admin</title>

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">

<style>

body{
    background:#020b22;
    color:white;
    font-family:Orbitron;
    text-align:center;
}

h1{
    margin-top:80px;
    margin-bottom:50px;
}

.container{
    width:500px;
    margin:auto;
}

.card{
    background:#08122f;
    padding:25px;
    border-radius:20px;
    margin-bottom:20px;
}

a{
    text-decoration:none;
    color:white;
    font-size:20px;
}

.btn{
    background:#dc2626;
    padding:15px 30px;
    border-radius:12px;
    display:inline-block;
}

</style>

</head>
<body>

<h1>DASHBOARD ADMIN</h1>

<div class="container">

<div class="card">
<a href="characters.php">
Kelola Character
</a>
</div>

<div class="card">
<a href="movies.php">
Kelola Movie
</a>
</div>

<div class="card">
<a href="planets.php">
Kelola Planet
</a>
</div>

<br>

<a class="btn" href="../pages/home.php">
Kembali ke Website
</a>

</div>

</body>
</html>