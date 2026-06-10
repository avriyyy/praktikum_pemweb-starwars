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
        <h1 class="title-auth">ATMIN PORTAL</h1>
        <p class="subtitle-auth">Khusus untuk admin only</p>
        <form action="portal.php" method="POST"><br>
            <input type="text" id="username" name="username" placeholder="username" class="input-auth" required><br>
            <input type="password" id="password" name="password" placeholder="password" class="input-auth" required><br>
            <label for="remember" class="remember-label"><input type="checkbox" id="remember" name="remember">Stay signed in</label><br>
            <button type="submit" id="signin" class="red-btn">SIGN-IN</button>
        </form>
        <a href="../auth/login.php" class="back-btn">← Back to Website</a>
    </div>
</body>
</html>