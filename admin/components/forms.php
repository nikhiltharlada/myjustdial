<?php
// require "../config/db.php";
// $sql="select * from forms";
// $stmt=mysqli_prepare($conn,$sql);
// if($stmt){
//     mysqli_stmt_execute($stmt);
//     $result=mysqli_stmt_get_result($stmt);
//     $customForms=mysqli_fetch_assoc($result);
// }

$customForms = [
    [
        'id' => 1,
        'name' => 'Member - Sign Up - Free',
        'shortcode' => '[form=signup_free]',
        'status' => 'Active',
        'type' => 'Custom',
        'updated' => '10/31/2026'
    ],
    [
        'id' => 2,
        'name' => 'Nxt Wave form',
        'shortcode' => '[form=nxt_wave_form]',
        'status' => 'Active',
        'type' => 'Custom',
        'updated' => '10/31/2026'
    ]
];

$defaultForms = [
    [
        'name' => 'Account Billing Address Update',
        'shortcode' => '[form=whmcs_billing_address]',
        'updated' => '12/24/2025'
    ],
    [
        'name' => 'Feature - Blog Articles',
        'shortcode' => '[form=blog_article_fields]',
        'updated' => '10/02/2026'
    ]
];
?>

<style>
/* FORMS MANAGER */
.forms-page {
    width: 100%;
    padding: 24px 18px;
    background: #f8f9fa;
    color: #344054;
    font-family: Arial, Helvetica, sans-serif;
}

/* TOP INFORMATION */
.forms-heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    margin-bottom: 20px;
}

.forms-info {
    padding: 12px 15px;
    background: #fff;
    border: 1px solid #d9dee5;
    border-left: 4px solid #3478c5;
    border-radius: 6px;
    font-size: 14px;
}

.forms-info i {
    color: #3478c5;
    margin-right: 7px;
}

.new-form-btn {
    background: #2875c9;
    color: white;
    border: none;
    border-radius: 6px;
    padding: 12px 18px;
    font-size: 14px;
    font-weight: bold;
    cursor: pointer;
    white-space: nowrap;
}

/* CUSTOM FORMS CONTAINER */
.forms-container {
    background: white;
    border: 1px solid #d7dce2;
    border-radius: 8px;
    overflow: visible;
    margin-bottom: 30px;
}

/* TOOLBAR */
.forms-toolbar {
    background: #243746;
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    flex-wrap: wrap;
    border-radius: 7px 7px 0 0;
}

.toolbar-left,
.toolbar-right {
    display: flex;
    align-items: center;
    gap: 7px;
    flex-wrap: wrap;
}

.forms-toolbar select,
.forms-toolbar input {
    height: 36px;
    border: 1px solid #d5d9df;
    border-radius: 5px;
    padding: 0 10px;
    background: white;
    color: #344054;
    font-size: 13px;
}

.forms-toolbar select {
    min-width: 140px;
}

.forms-toolbar input {
    width: 140px;
}

.apply-btn {
    height: 36px;
    padding: 0 17px;
    background: transparent;
    border: 1px solid #dce2e8;
    border-radius: 5px;
    color: white;
    cursor: pointer;
}

/* TABLE */
.forms-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
}

.forms-table th {
    background: #e9edf2;
    color: #344054;
    text-align: left;
    padding: 13px 14px;
    border: 1px solid #dce1e6;
    font-weight: bold;
}

.forms-table td {
    padding: 15px 14px;
    border: 1px solid #e0e4e8;
    vertical-align: middle;
}

.forms-table tbody tr:nth-child(odd) {
    background: #f2f4f7;
}

.forms-table tbody tr:nth-child(even) {
    background: #fff;
}

.forms-table input[type="checkbox"] {
    width: 15px;
    height: 15px;
    cursor: pointer;
}

/* ACTION BUTTONS */
.edit-btn {
    background: #294e68;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 9px 16px;
    cursor: pointer;
    font-weight: bold;
}

.action-wrapper {
    position: relative;
    display: inline-block;
    margin-left: 8px;
}

.action-btn {
    background: #fff;
    border: 1px solid #d7dce2;
    border-radius: 5px;
    padding: 9px 12px;
    cursor: pointer;
    color: #344054;
}

.action-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    width: 155px;
    background: white;
    border: 1px solid #d8dce2;
    border-radius: 5px;
    box-shadow: 0 4px 12px rgba(0,0,0,.15);
    z-index: 100;
}

.action-menu.show {
    display: block;
}

.action-menu button {
    display: block;
    width: 100%;
    padding: 10px;
    text-align: left;
    background: white;
    border: none;
    cursor: pointer;
    font-size: 13px;
    color: #344054;
}

.action-menu button:hover {
    background: #f0f2f5;
}

.action-menu .delete-action {
    color: #c62828;
}

/* PREVIEW */
.form-preview {
    width: 110px;
    height: 60px;
    background: #e0e4e8;
    border-radius: 5px;
    padding: 12px 8px;
}

.preview-line {
    height: 5px;
    background: #8bb7a8;
    margin: 5px 0;
    border-radius: 3px;
}

.preview-line.blue {
    background: #4388ba;
}

/* SHORTCODE */
.shortcode {
    color: #344054;
    font-size: 14px;
}

.last-update {
    float: right;
    font-size: 11px;
    color: #667085;
}

/* TABLE FOOTER */
.table-footer {
    padding: 12px 0;
    font-size: 13px;
}

/* DEFAULT FORMS */
.default-section {
    background: white;
    border: 1px solid #d7dce2;
    border-radius: 8px;
    overflow: visible;
}

.default-title {
    background: #243746;
    color: white;
    padding: 15px 12px;
    font-size: 18px;
    font-weight: bold;
    border-radius: 7px 7px 0 0;
}

.default-label {
    background: #f8dce1;
    color: #73515a;
    padding: 5px 8px;
    border-radius: 5px;
    font-size: 11px;
    font-weight: bold;
    margin-right: 8px;
}

.default-action {
    background: #f8f9fa;
    border: 1px solid #d7dce2;
    padding: 8px 12px;
    border-radius: 5px;
    cursor: pointer;
}

/* RESPONSIVE */
@media(max-width: 900px) {
    .forms-toolbar {
        align-items: flex-start;
    }

    .forms-table {
        min-width: 750px;
    }

    .forms-container,
    .default-section {
        overflow-x: auto;
    }
}

@media(max-width: 600px) {
    .forms-heading {
        align-items: flex-start;
        flex-direction: column;
    }

    .forms-page {
        padding: 12px;
    }
}
</style>

<div class="forms-page">

    <!-- PAGE HEADER -->
    <div class="forms-heading">

        <div class="forms-info">
            <i class="fa-solid fa-circle-info"></i>
            <strong>Form Manager</strong> –
            Build and manage website forms. Add or remove input fields
            when editing individual forms.
        </div>

        <button class="new-form-btn">
            New Form +
        </button>

    </div>

    <!-- CUSTOM FORMS -->
    <div class="forms-container">

        <!-- TOOLBAR -->
        <div class="forms-toolbar">

            <div class="toolbar-left">

                <select id="bulkAction">
                    <option value="">Bulk Actions</option>
                    <option value="enable">Enable</option>
                    <option value="disable">Disable</option>
                    <option value="delete">Delete</option>
                </select>

                <button class="apply-btn" onclick="applyBulkAction()">
                    Apply
                </button>

            </div>

            <div class="toolbar-right">

                <select id="statusFilter" onchange="filterForms()">
                    <option value="">Filter by Status</option>
                    <option value="Active">Active</option>
                    <option value="Disabled">Disabled</option>
                </select>

                <select id="typeFilter" onchange="filterForms()">
                    <option value="">Filter by Type</option>
                    <option value="Custom">Custom</option>
                </select>

                <select id="sortForms" onchange="sortForms()">
                    <option value="asc">Name A - Z</option>
                    <option value="desc">Name Z - A</option>
                </select>

                <input type="text"
                       id="searchForms"
                       placeholder="🔍 Search by Keyword"
                       onkeyup="filterForms()">

            </div>

        </div>

        <!-- CUSTOM FORMS TABLE -->
        <table class="forms-table" id="customFormsTable">

            <thead>
                <tr>
                    <th width="4%">
                        <input type="checkbox" id="selectAll"
                               onclick="selectAllForms()">
                    </th>
                    <th width="15%">Actions</th>
                    <th width="12%">Preview</th>
                    <th>Custom Forms (2)</th>
                    <th width="35%">Shortcode</th>
                </tr>
            </thead>

            <tbody id="customFormsBody">

                <?php foreach ($customForms as $form): ?>

                <tr data-name="<?= htmlspecialchars($form['name']) ?>"
                    data-status="<?= $form['status'] ?>"
                    data-type="<?= $form['type'] ?>"
                    data-id="<?= $form['id'] ?>">

                    <td>
                        <input type="checkbox" class="form-checkbox"
                               value="<?= $form['id'] ?>">
                    </td>

                    <td>
                        <button class="edit-btn"
                                onclick="alert('Edit form page will be developed next.')">
                            Edit
                        </button>

                        <div class="action-wrapper">

                            <button class="action-btn"
                                    onclick="toggleActionMenu(this)">
                                Actions <i class="fa-solid fa-caret-down"></i>
                            </button>

                            <div class="action-menu">

                                <button onclick="copyShortcode(this)">
                                    <i class="fa-regular fa-copy"></i>
                                    Copy Shortcode
                                </button>

                                <button onclick="cloneForm(this)">
                                    <i class="fa-regular fa-clone"></i>
                                    Clone Form
                                </button>

                                <button onclick="disableForm(this)">
                                    <i class="fa-solid fa-power-off"></i>
                                    Disable
                                </button>

                                <button class="delete-action"
                                        onclick="deleteForm(this)">
                                    <i class="fa-solid fa-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>
                    </td>

                    <td>
                        <div class="form-preview">
                            <div class="preview-line"></div>
                            <div class="preview-line blue"></div>
                            <div class="preview-line"></div>
                        </div>
                    </td>

                    <td>
                        <?= htmlspecialchars($form['name']) ?>
                    </td>

                    <td>
                        <span class="shortcode">
                            <?= htmlspecialchars($form['shortcode']) ?>
                        </span>

                        <span class="last-update">
                            Last Update: <?= $form['updated'] ?>
                        </span>
                    </td>

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

    <div class="table-footer" id="customCount">
        Showing 1 to 2 of 2 entries
    </div>

    <!-- DEFAULT FORMS -->
    <div class="default-section">

        <div class="default-title">
            Default Forms (35)
        </div>

        <table class="forms-table">

            <thead>
                <tr>
                    <th width="10%">Actions</th>
                    <th width="45%">Form Name</th>
                    <th>Shortcode</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($defaultForms as $form): ?>

                <tr>

                    <td>
                        <button class="default-action"
                                onclick="alert('Default form actions will be developed next.')">
                            Actions <i class="fa-solid fa-caret-down"></i>
                        </button>
                    </td>

                    <td>
                        <span class="default-label">DEFAULT FORM</span>
                        <?= htmlspecialchars($form['name']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($form['shortcode']) ?>

                        <span class="last-update">
                            Last Update: <?= $form['updated'] ?>
                        </span>
                    </td>

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>

<script>
// ACTION DROPDOWN
function toggleActionMenu(button) {
    const menu = button.nextElementSibling;

    document.querySelectorAll('.action-menu').forEach(item => {
        if (item !== menu) {
            item.classList.remove('show');
        }
    });

    menu.classList.toggle('show');
}

// CLOSE DROPDOWN WHEN CLICKING OUTSIDE
document.addEventListener('click', function(event) {
    if (!event.target.closest('.action-wrapper')) {
        document.querySelectorAll('.action-menu').forEach(menu => {
            menu.classList.remove('show');
        });
    }
});

// SELECT ALL
function selectAllForms() {
    const checked = document.getElementById('selectAll').checked;

    document.querySelectorAll('.form-checkbox').forEach(box => {
        if (box.closest('tr').style.display !== 'none') {
            box.checked = checked;
        }
    });
}

// SEARCH AND FILTER
function filterForms() {
    const search = document.getElementById('searchForms').value.toLowerCase();
    const status = document.getElementById('statusFilter').value;
    const type = document.getElementById('typeFilter').value;

    const rows = document.querySelectorAll('#customFormsBody tr');

    let visible = 0;

    rows.forEach(row => {
        const name = row.dataset.name.toLowerCase();

        const matchesSearch = name.includes(search);
        const matchesStatus = !status || row.dataset.status === status;
        const matchesType = !type || row.dataset.type === type;

        const show = matchesSearch && matchesStatus && matchesType;

        row.style.display = show ? '' : 'none';

        if (show) visible++;
    });

    document.getElementById('customCount').textContent =
        visible === 0
        ? 'Showing 0 entries'
        : `Showing 1 to ${visible} of ${visible} entries`;
}

// SORT FORMS
function sortForms() {
    const order = document.getElementById('sortForms').value;
    const tbody = document.getElementById('customFormsBody');

    const rows = Array.from(tbody.querySelectorAll('tr'));

    rows.sort((a, b) => {
        const nameA = a.dataset.name.toLowerCase();
        const nameB = b.dataset.name.toLowerCase();

        return order === 'asc'
            ? nameA.localeCompare(nameB)
            : nameB.localeCompare(nameA);
    });

    rows.forEach(row => tbody.appendChild(row));
    filterForms();
}

// COPY SHORTCODE
function copyShortcode(button) {
    const row = button.closest('tr');
    const shortcode = row.querySelector('.shortcode').textContent.trim();

    navigator.clipboard.writeText(shortcode)
        .then(() => alert('Shortcode copied successfully!'))
        .catch(() => alert('Could not copy shortcode.'));
}

// CLONE FORM - DEMO ONLY
function cloneForm(button) {
    alert('Clone Form functionality will be connected to the database.');
}

// DISABLE FORM - TEMPORARY UI ACTION
function disableForm(button) {
    const row = button.closest('tr');

    if (confirm('Do you want to disable this form?')) {
        row.dataset.status = 'Disabled';
        filterForms();
        alert('Form disabled in this temporary interface.');
    }
}

// DELETE FORM - TEMPORARY UI ACTION
function deleteForm(button) {
    const row = button.closest('tr');

    if (confirm('Are you sure you want to delete this form?')) {
        row.remove();
        filterForms();
    }
}

// BULK ACTION - DEMO ONLY
function applyBulkAction() {
    const action = document.getElementById('bulkAction').value;

    const selected = document.querySelectorAll(
        '.form-checkbox:checked'
    );

    if (!action) {
        alert('Please select a bulk action.');
        return;
    }

    if (selected.length === 0) {
        alert('Please select at least one form.');
        return;
    }

    if (action === 'delete') {
        if (!confirm('Delete selected forms?')) return;

        selected.forEach(box => box.closest('tr').remove());
    } else if (action === 'disable') {
        selected.forEach(box => {
            box.closest('tr').dataset.status = 'Disabled';
        });
    } else if (action === 'enable') {
        selected.forEach(box => {
            box.closest('tr').dataset.status = 'Active';
        });
    }

    document.getElementById('selectAll').checked = false;
    filterForms();
}
</script>
