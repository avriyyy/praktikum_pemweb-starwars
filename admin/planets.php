<?php
$activePage = 'planets';
include '../includes/admin-nav.php';
?>

<div class="admin-content">

    <h2 class="dashboard-title">
        Planet Management
    </h2>

    <div class="admin-search">
        <input type="text" placeholder="Search...">

        <svg class="admin-search-icon" width="18" height="18" viewBox="0 0 18 18" fill="none">
            <path d="M15.75 15.75L12.4875 12.4875M14.25 8.25C14.25 11.5637 11.5637 14.25 8.25 14.25C4.93629 14.25 2.25 11.5637 2.25 8.25C2.25 4.93629 4.93629 2.25 8.25 2.25C11.5637 2.25 14.25 4.93629 14.25 8.25Z"
                  stroke="#B3B3B3"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"/>
        </svg>
    </div>

    <a href="#" class="add-item-btn">
        + Add Planet
    </a>

    <div class="management-table-container">

        <table class="management-table">

            <thead>
                <tr>
                    <th>image</th>
                    <th>Planet Name</th>
                    <th>Type</th>
                    <th>Population</th>
                    <th>Climate</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>

                <tr>

                    <td>
                        <img src="../assets/planet1.png"
                             class="planet-image"
                             alt="">
                    </td>

                    <td>Tatooine</td>

                    <td>Dessert</td>

                    <td>200000</td>

                    <td>Hot</td>

                    <td>

                        <div class="table-actions">

                            <a href="#" class="edit-btn">
                                Edit
                            </a>

                            <a href="#" class="delete-btn">
                                Delete
                            </a>

                        </div>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>
