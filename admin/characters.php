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
                       placeholder="Name"
                       class="modal-input">

                <input type="text"
                       placeholder="Species"
                       class="modal-input">

                <input type="text"
                       placeholder="Affiliation"
                       class="modal-input">

                <input type="text"
                       placeholder="Home Planet"
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

                    <img src="../assets/upload-img.svg"
                          alt="">

                    <span>
                        Upload Image
                    </span>

                </label>

            </div>

        </form>

    </div>

</div>

<div class="modal-overlay" id="editModal">

    <div class="modal-card">

        <button class="modal-close" id="closeEditModal">
            ×
        </button>

        <h2 class="modal-title" id="editModalTitle">
            Edit Character
        </h2>

        <form class="modal-form">

            <div class="modal-left">

                <input type="text"
                       placeholder="Name"
                       class="modal-input">

                <input type="text"
                       placeholder="Species"
                       class="modal-input">

                <input type="text"
                       placeholder="Affiliation"
                       class="modal-input">

                <input type="text"
                       placeholder="Home Planet"
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

                    <img src="../assets/upload-img.svg"
                          alt="">

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

    const editModal = document.getElementById('editModal');
    const closeEditModal = document.getElementById('closeEditModal');
    const editUploadBox = editModal.querySelector('.upload-box');
    const editUploadDefaultHTML = editUploadBox.innerHTML;

    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            const row = this.closest('tr');
            const cells = row.querySelectorAll('td');

            const imgSrc = cells[0].querySelector('img').src;
            const name = cells[1].textContent.trim();
            const species = cells[2].textContent.trim();
            const affiliation = cells[3].textContent.trim();
            const homePlanet = cells[4].textContent.trim();

            const inputs = editModal.querySelectorAll('.modal-input');
            inputs[0].value = name;
            inputs[1].value = species;
            inputs[2].value = affiliation;
            inputs[3].value = homePlanet;

            const fileInput = editUploadBox.querySelector('input[type="file"]');
            editUploadBox.innerHTML = '';
            editUploadBox.appendChild(fileInput);
            const preview = document.createElement('img');
            preview.src = imgSrc;
            preview.style.cssText = 'width:100%;height:100%;object-fit:contain;border-radius:8px;';
            editUploadBox.appendChild(preview);

            editModal.classList.add('show');
        });
    });

    closeEditModal.addEventListener('click', () => {
        editUploadBox.innerHTML = editUploadDefaultHTML;
        editModal.classList.remove('show');
    });

    editModal.addEventListener('click', e => {
        if (e.target === editModal) {
            editUploadBox.innerHTML = editUploadDefaultHTML;
            editModal.classList.remove('show');
        }
    });
</script>

<?php include '../includes/admin-foot.php'; ?>