<?php
$activePage = 'Settings';
include '../includes/navbar.php';
?>

<img src="../assets/profile-bg.jpg" alt="" class="profile-bg">

<div class="settings-page">

    <div class="settings-header">

        <h1>Settings</h1>

        <p>Kelola akun dan preferensi aplikasi</p>

    </div>

    <div class="settings-card">

        <form action="" method="POST">

            <h2>Account information</h2>

            <div class="settings-group">

                <label>Username</label>

                <input type="text"
                       name="username"
                       value="Apriyudha-67">

            </div>

            <div class="settings-group">

                <label>Email</label>

                <input type="email"
                       name="email"
                       value="apriyudha87@gmail.com">

            </div>

            <h3>Security</h3>

            <div class="settings-group">

                <label>Current password</label>

                <input type="password"
                       name="current_password"
                       placeholder="********">

            </div>

            <div class="settings-group">

                <label>New password</label>

                <input type="password"
                       name="new_password"
                       placeholder="New password">

            </div>

            <button type="submit" class="settings-save-btn">
                Save
            </button>

        </form>

    </div>

</div>

<?php include '../includes/footer.php'; ?>