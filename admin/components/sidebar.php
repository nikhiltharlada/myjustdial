
<style>
.sidebar {
    position: fixed;
    top: 65px;
    left: 0;

    width: 213px;
    height: calc(100vh - 65px);

    background: #1b1d1f;
    color: #c5c7ca;

    font-family: Arial, sans-serif;

    overflow: visible;
    z-index: 1500;
}

/* BRAND */
.sidebar-brand {
    height: 82px;
    display: flex;
    align-items: center;
    padding: 0 15px;
    gap: 12px;
    border-bottom: 1px solid #303234;
    overflow: hidden;
}

.sidebar-brand .logo {
    font-size: 28px;
}

.sidebar-brand h2 {
    color: white;
    font-size: 14px;
    white-space: nowrap;
}

/* MENU ITEM */
.sidebar-item {
    position: relative;
    width: 100%;
    border-bottom: 1px solid #303234;
}

/* MENU BUTTON */
.sidebar-btn {
    width: 100%;
    height: 59px;
    display: flex;
    align-items: center;
    padding: 0 15px;
    gap: 12px;

    background: transparent;
    border: none;

    color: #c5c7ca;
    cursor: pointer;
    text-align: left;
    transition: background .2s;
}

.sidebar-btn:hover {
    background: #303234;
    color: white;
}

/* ICON */
.sidebar-btn .menu-icon {
    width: 16px;
    min-width: 16px;
    font-size: 15px;
    text-align: center;
}

/* TEXT */
.sidebar-btn h1 {
    font-size: 14px;
    font-weight: 400;
    margin: 0;
    flex: 1;
    white-space: nowrap;
}

/* ARROW */
.sidebar-btn .arrow {
    font-size: 21px;
    margin-left: auto;
}

/* SUBMENU */
.submenu {
    display: none;

    position: absolute;
    top: 0;
    left: 100%;

    width: 225px;

    background: #292b2e;
    border: 1px solid #383a3d;
    border-radius: 12px;

    padding: 8px 0;

    box-shadow: 0 5px 20px rgba(0,0,0,.35);

    z-index: 3000;
}

/* SHOW SUBMENU ON HOVER */
.sidebar-item:hover > .submenu {
    display: block;
}

/* SUBMENU LINKS */
.submenu a {
    display: block;
    padding: 12px 18px;

    color: #c5c7ca;
    text-decoration: none;
    font-size: 14px;
}

.submenu a:hover {
    background: #3b3d40;
    color: white;
}

/* DEVELOPER HUB */
.developer-btn {
    width: 100%;
    height: 59px;

    display: flex;
    align-items: center;
    gap: 12px;

    padding: 0 15px;

    background: transparent;
    color: #c5c7ca;

    border: none;
    border-bottom: 1px solid #303234;

    font-size: 14px;
    text-align: left;
    cursor: pointer;
}

.developer-btn:hover {
    background: #303234;
    color: white;
}

/* COLLAPSE */
.collapse-btn {
    position: absolute;
    bottom: 0;
    left: 0;

    width: 100%;
    height: 57px;

    display: flex;
    align-items: center;
    gap: 12px;

    padding: 0 15px;

    background: #1b1d1f;
    color: #c5c7ca;

    border: none;
    border-top: 1px solid #303234;

    font-size: 14px;
    cursor: pointer;
}

.collapse-btn:hover {
    background: #303234;
    color: white;
}

/* SMALL SCREENS */
@media(max-height: 600px) {
    .sidebar {
        overflow-y: auto;
        overflow-x: visible;
    }

    .collapse-btn {
        position: sticky;
        bottom: 0;
    }
}
</style>


<div class="sidebar">

    <!-- BRAND -->
    <div class="sidebar-brand">
        <span class="logo">💡</span>
        <h2>Brilliant Directories</h2>
    </div>

    <!-- DASHBOARD -->
    <div class="sidebar-item">
        <button class="sidebar-btn">
            <span class="menu-icon"><i class="fa-solid fa-house"></i></span>
            <h1>Dashboard</h1>
            <span class="arrow">›</span>
        </button>

        <div class="submenu">
            <a href="#">Dashboard Overview</a>
            <a href="#">Analytics</a>
            <a href="#">Reports</a>
        </div>
    </div>

    <!-- MY MEMBERS -->
    <div class="sidebar-item">
        <button class="sidebar-btn">
            <span class="menu-icon"><i class="fa-solid fa-users"></i></span>
            <h1>My Members</h1>
            <span class="arrow">›</span>
        </button>

        <div class="submenu">
            <a href="#">View Members</a>
            <a href="#">Add Members</a>
            <a href="#">Member Categories</a>
            <a href="#">Import Members</a>
        </div>
    </div>

    <!-- MY CONTENT -->
    <div class="sidebar-item">
        <button class="sidebar-btn">
            <span class="menu-icon"><i class="fa-regular fa-folder"></i></span>
            <h1>My Content</h1>
            <span class="arrow">›</span>
        </button>

        <div class="submenu">
            <a href="#">All Content</a>
            <a href="#">Add Content</a>
            <a href="#">Categories</a>
            <a href="#">Pages</a>
        </div>
    </div>

    <!-- INTERACTIONS -->
    <div class="sidebar-item">
        <button class="sidebar-btn">
            <span class="menu-icon"><i class="fa-regular fa-comments"></i></span>
            <h1>Interactions</h1>
            <span class="arrow">›</span>
        </button>

        <div class="submenu">
            <a href="#">Messages</a>
            <a href="#">Reviews</a>
            <a href="#">Comments</a>
        </div>
    </div>

    <!-- FINANCE -->
    <div class="sidebar-item">
        <button class="sidebar-btn">
            <span class="menu-icon"><i class="fa-solid fa-chart-column"></i></span>
            <h1>Finance</h1>
            <span class="arrow">›</span>
        </button>

        <div class="submenu">
            <a href="#">Transactions</a>
            <a href="#">Invoices</a>
            <a href="#">Payments</a>
        </div>
    </div>

    <!-- EMAILS -->
    <div class="sidebar-item">
        <button class="sidebar-btn">
            <span class="menu-icon"><i class="fa-regular fa-envelope"></i></span>
            <h1>Emails</h1>
            <span class="arrow">›</span>
        </button>

        <div class="submenu">
            <a href="#">All Emails</a>
            <a href="#">Send Email</a>
            <a href="#">Email Templates</a>
        </div>
    </div>

    <!-- TOOLBOX -->
    <div class="sidebar-item">
        <button class="sidebar-btn">
            <span class="menu-icon"><i class="fa-solid fa-screwdriver-wrench"></i></span>
            <h1>Toolbox</h1>
            <span class="arrow">›</span>
        </button>

        <div class="submenu">
            <a href="#">Widget Manager</a>
            <a href="#">Sidebar Manager</a>
            <a href="#">Menu Manager</a>
            <a href="index.php?page=forms">Form Manager</a>
            <a href="#">Sitemap Generator</a>
        </div>
    </div>

    <!-- SETTINGS -->
    <div class="sidebar-item">
        <button class="sidebar-btn">
            <span class="menu-icon"><i class="fa-solid fa-gear"></i></span>
            <h1>Settings</h1>
            <span class="arrow">›</span>
        </button>

        <div class="submenu">
            <a href="#">General Settings</a>
            <a href="#">Website Settings</a>
            <a href="#">User Settings</a>
        </div>
    </div>

    <!-- DEVELOPER HUB -->
    <button class="developer-btn">
        <i class="fa-solid fa-border-all"></i>
        Developer Hub
    </button>

    <!-- COLLAPSE -->
    <button class="collapse-btn">
        <i class="fa-solid fa-table-columns"></i>
        Collapse
    </button>

</div>
