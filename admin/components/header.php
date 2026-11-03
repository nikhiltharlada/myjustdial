
<style>
.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 65px;
    padding: 0 12px;
    background: #202124;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 2000;
    color: white;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

.header-left,
.header-right {
    display: flex;
    align-items: center;
    gap: 10px;
}

.header a {
    text-decoration: none;
}

.switch-website {
    color: white;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    white-space: nowrap;
}

.back-icon {
    width: 22px;
    height: 22px;
    border: 1px solid #888;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.filteroptions {
    display: flex;
    gap: 5px;
}

.filteroptions select,
.filteroptions input {
    height: 36px;
    background: #34383d;
    color: white;
    border: 1px solid #45494e;
    border-radius: 5px;
    padding: 0 10px;
}

.filteroptions select {
    width: 100px;
}

.filteroptions input {
    width: 250px;
}

.header-button {
    height: 36px;
    padding: 0 15px;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 13px;
    white-space: nowrap;
}

.quick-create {
    background: #5144e8;
}

.visit-website {
    background: #e7653e;
    display: flex;
    align-items: center;
}

.account-btn {
    background: #34383d;
    border: 1px solid #45494e;
}

.header-dropdown {
    position: relative;
}

.header-dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    top: 100%;
    margin-top: 8px;
    width: 180px;
    background: #292b2e;
    border-radius: 7px;
    box-shadow: 0 5px 15px rgba(0,0,0,.3);
    overflow: hidden;
    z-index: 3000;
}

.header-dropdown:hover .header-dropdown-content {
    display: block;
}

.header-dropdown-content a {
    display: block;
    padding: 12px 15px;
    color: #ddd;
    font-size: 13px;
}

.header-dropdown-content a:hover {
    background: #414449;
    color: white;
}

@media(max-width: 700px) {
    .header {
        padding: 0 7px;
    }

    .filteroptions input {
        width: 110px;
    }

    .header-button {
        padding: 0 7px;
        font-size: 11px;
    }
}
</style>

<header class="header">

    <div class="header-left">

        <a href="#" class="switch-website">
            <span class="back-icon">←</span>
            Switch Website
        </a>

        <div class="filteroptions">
            <select name="filter">
                <option>All</option>
                <option>Active</option>
                <option>Inactive</option>
            </select>

            <input type="search" placeholder="Search Website...">
        </div>

    </div>

    <div class="header-right">

        <div class="header-dropdown">
            <button type="button" class="header-button quick-create">
                Quick Create ▼
            </button>

            <div class="header-dropdown-content">
                <a href="#">Create Member</a>
                <a href="#">Create Content</a>
                <a href="#">Create Page</a>
                <a href="#">Create Category</a>
            </div>
        </div>

        <a href="#" class="header-button visit-website">
            Visit Website ↗
        </a>

        <div class="header-dropdown">
            <button type="button" class="header-button account-btn">
                My Account ▼
            </button>

            <div class="header-dropdown-content">
                <a href="#">My Profile</a>
                <a href="#">Account Settings</a>
                <a href="auth/logout.php">Sign Out</a>
            </div>
        </div>

    </div>

</header>
