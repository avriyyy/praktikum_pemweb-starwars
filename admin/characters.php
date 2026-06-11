<?php
$activePage = 'characters';
include '../includes/admin-nav.php';
?>

<div class="admin-content">

    <h2 class="dashboard-title">
        Character Management
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

    <a href="#" class="add-item-btn" data-type="Character">
        + Add Character
    </a>

    <div class="management-table-container">

        <table class="management-table">

            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Species</th>
                    <th>Affiliation</th>
                    <th>Home Planet</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>

                <tr>

                    <td>
                        <img src="../assets/character1.png"
                             class="table-image"
                             alt="">
                    </td>

                    <td>Darth Vader</td>

                    <td>Human</td>

                    <td>Empire</td>

                    <td>Mustafar</td>

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

<div class="modal-overlay" id="adminModal">

    <div class="modal-card">

        <button class="modal-close" id="closeModal">
            ×
        </button>

        <h2 class="modal-title" id="modalTitle">Add Character</h2>
        
        <form class="modal-form">

            <div class="modal-left">

                <input type="text"
                       placeholder="Title"
                       class="modal-input">

                <input type="text"
                       placeholder="Year"
                       class="modal-input">

                <input type="text"
                       placeholder="Rating"
                       class="modal-input">

                <input type="text"
                       placeholder="Genre"
                       class="modal-input">

                <textarea placeholder="Description"
                          class="modal-textarea"></textarea>

                <button type="submit"
                        class="save-btn">
                    Save
                </button>

            </div>


            <div class="modal-right">

                <label class="upload-box">

                    <input type="file"
                           hidden>

                    <svg width="40"
                         height="40"
                         viewBox="0 0 24 24"
                         fill="none">

                        <path d="M14.2632 15H9.73684C6.01541 15 3 12.0899 3 8.5C3 4.91015 6.01541 2 9.73684 2C12.5362 2 14.9366 3.6498 15.9484 6.00108C16.2849 5.93058 16.6342 5.89362 17 5.89362C19.7614 5.89362 22 8.05374 22 10.7181C22 13.3824 19.7614 15.5426 17 15.5426"
                              stroke="currentColor"
                              stroke-width="2"/>

                        <path d="M12 22V12M12 12L8 16M12 12L16 16"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>

                    <span>
                        Upload Image
                    </span>

                </label>

            </div>

        </form>

    </div>

</div>
<script>
    const modal = document.getElementById('adminModal');

    const closeModal = document.getElementById('closeModal');

    document.querySelectorAll('.add-item-btn').forEach(button => {

        button.addEventListener('click', function(e) {

            e.preventDefault();

            const type = this.dataset.type;

            document.getElementById('modalTitle').textContent =
                'Add ' + type;

            modal.classList.add('show');

        });

    });

    closeModal.addEventListener('click', () => {

        modal.classList.remove('show');

    });

    modal.addEventListener('click', e => {

        if (e.target === modal) {

            modal.classList.remove('show');

        }

    });
</script>

<?php include '../includes/admin-foot.php'; ?>