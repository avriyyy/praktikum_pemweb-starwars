
<?php
require '../config/database.php';

if (isset($_POST['submit'])) {

    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    if ($password != $confirm_password) {

        echo "<script>
                alert('Konfirmasi password tidak sama!');
              </script>";

    } else {

        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query(
            $conn,
            "INSERT INTO users (username, email, password, role)
            VALUES
            ('$username', '$email', '$password', 'user')"
        );

        echo "<script>
                alert('Registrasi berhasil!');
                document.location.href='login.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../includes/style.css">
</head>
<body class="bg-auth">

    <img src="../assets/starwars-logo.png" alt="Logo" class="sw-logo">

    <div class="container-auth">

        <h1 class="title-auth">REGISTER</h1>
        <p class="subtitle-auth">Bikin akun dulu gan!</p>

        <form action="" method="POST">

            <br>

            <input
                type="text"
                name="username"
                placeholder="username"
                class="input-auth"
                required>

            <br>

            <input
                type="email"
                name="email"
                placeholder="e-mail"
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

            <input
                type="password"
                name="confirm_password"
                placeholder="confirm password"
                class="input-auth"
                required>

            <br>

            <button
                type="submit"
                name="submit"
                id="signin"
                class="red-btn">

                CREATE ACCOUNT

            </button>

        </form>

        <button
            onclick="window.location.href='login.php'"
            type="button"
            class="transparent-btn">

            LOGIN

        </button>

    </div>

</body>
</html>
