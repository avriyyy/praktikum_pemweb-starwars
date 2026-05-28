<!DOCTYPE html>
<html lang="en">
<head>
    <title>register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../includes/style.css">
</head>
<body class="bg-auth">
    <img src="../assets/starwars-logo.png" alt="Logo" class="sw-logo">
    <div class="container-auth">
        <h1 class="title-auth">REGISTER</h1>
        <p class="subtitle-auth">Bikin akun dulu gan!</p>
        <form action="" method="POST"><br>
            <input type="text" id="username" name="username" placeholder="username" class="input-auth" required><br>
            <input type="email" id="email" name="email" placeholder="email" class="input-auth" required><br>
            <input type="password" id="password" name="password" placeholder="password" class="input-auth" required><br>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="confirm password" class="input-auth" required><br>
            <button type="submit" id="signin" class="red-btn">CREATE ACCOUNT</button>
        </form>
        <button onclick="window.location.href='login.php'" type="button" class="transparent-btn">LOGIN</button>
    </div>
</body>
</html>