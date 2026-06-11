<?php
$activePage = 'users';
include '../includes/admin-nav.php';
?>

<div class="admin-content">

    <h2 class="dashboard-title">
        User Management
    </h2>

    <div class="admin-search">
        <input type="text" placeholder="Search user...">

        <svg class="admin-search-icon"
             width="18"
             height="18"
             viewBox="0 0 18 18"
             fill="none">

            <path d="M15.75 15.75L12.4875 12.4875M14.25 8.25C14.25 11.5637 11.5637 14.25 8.25 14.25C4.93629 14.25 2.25 11.5637 2.25 8.25C2.25 4.93629 4.93629 2.25 8.25 2.25C11.5637 2.25 14.25 4.93629 14.25 8.25Z"
                  stroke="#B3B3B3"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"/>
        </svg>
    </div>

    <div class="user-stats">

        <div class="user-stat-card">
            <span>Total Users</span>
            <h3>8</h3>
        </div>

        <div class="user-stat-card">
            <span>Admin</span>
            <h3>1</h3>
        </div>

    </div>

    <a href="#" class="add-item-btn" data-type="User">
        + Add User
    </a>

    <div class="management-table-container">

        <table class="management-table">

            <thead>

                <tr>
                    <th>Avatar</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>
                        <img src="../assets/yoda.jpg"
                             class="table-avatar"
                             alt="">
                    </td>

                    <td>Apri</td>

                    <td>apri67@gmail.com</td>

                    <td>Admin</td>

                </tr>
                
            </tbody>

        </table>

    </div>

</div>