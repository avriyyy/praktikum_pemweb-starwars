<?php
session_start();
require '../config/database.php';

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn,
        "SELECT * FROM users WHERE username='$username'");

    if(mysqli_num_rows($query) === 1){

        $user = mysqli_fetch_assoc($query);

        if(password_verify($password, $user['password'])){

            $_SESSION['login'] = true;
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            header("Location: ../pages/home.php");
            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../includes/style.css">
</head>

<body class="bg-auth">

<img src="../assets/starwars-logo.png" alt="Logo" class="sw-logo">

<div class="container-auth">

    <h1 class="title-auth">LOGIN</h1>
    <p class="subtitle-auth">Enter the galaxy and explore the universe</p>

    <?php if(isset($error)) : ?>
        <p style="color:red;">
            Username atau password salah!
        </p>
    <?php endif; ?>

    <form method="POST">

        <br>

        <input
            type="text"
            name="username"
            placeholder="username"
            class="input-auth"
            required>

        <br>

        <input
            type="password"
            name="password"
            placeholder="password"
            class="input-auth"
            required>

        <br>

        <label for="remember" class="remember-label">
            <input type="checkbox" id="remember">
            Stay signed in
        </label>

        <br>

        <button
            type="submit"
            name="submit"
            class="red-btn">

            SIGN-IN

        </button>

    </form>

    <button
        onclick="window.location.href='register.php'"
        type="button"
        class="transparent-btn">

        CREATE ACCOUNT

    </button>

</div>

</body>

</html>