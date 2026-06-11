<?php
$activePage = 'settings';
include '../includes/admin-nav.php';
?>

<div class="admin-content">

    <h2 class="dashboard-title">
        Settings
    </h2>

    <div class="settings-container">

        <div class="settings-profile">

            <img src="../assets/yoda.jpg"
                 alt="Profile"
                 class="settings-avatar">

            <button class="edit-profile-btn">
                Edit profile
            </button>

        </div>

        <div class="settings-card">

            <div class="settings-section">

                <h3>Account Information</h3>

                <div class="settings-input-group">

                    <label>Username</label>

                    <input type="text"
                           value="Apriyudha-67">

                </div>

                <div class="settings-input-group">

                    <label>Email</label>

                    <input type="email"
                           value="apriyudha67@gmail.com">

                </div>

            </div>

            <div class="settings-section">

                <h3>Security</h3>

                <div class="settings-input-group">

                    <label>Current password</label>

                    <input type="password"
                           placeholder="Current password">

                </div>

                <div class="settings-input-group">

                    <label>New password</label>

                    <input type="password"
                           placeholder="New password">

                </div>

            </div>

        </div>

    </div>

</div>

<?php include '../includes/admin-foot.php'; ?>