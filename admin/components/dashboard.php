
<style>
.dashboard {
    width: 100%;
    padding: 20px 25px;
    
}

/* START HERE BANNER */
.start-banner {
    display: flex;
    align-items: center;
    min-height: 85px;
    background: linear-gradient(110deg, #2850b4, #7934e8);
    border-radius: 12px 12px 0 0;
    overflow: hidden;
    color: white;
    margin-bottom: 24px;
}

.start-title {
    height: 85px;
    width: 245px;
    min-width: 245px;
    background: #222e3b;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 23px;
    font-weight: bold;
    clip-path: polygon(0 0, 82% 0, 100% 100%, 0 100%);
}

.start-description {
    padding: 15px 20px;
    font-size: 21px;
    font-weight: bold;
}

/* DASHBOARD GRID */
/* DASHBOARD GRID */
.dashboard-grid {
    display: grid;

    grid-template-columns:
        minmax(0, 1fr)
        minmax(0, 1fr)
        minmax(0, 1fr);

    gap: 25px;

    align-items: stretch;

    width: 100%;
    min-width: 0;
}

.dashboard-grid > * {
    min-width: 0;
}

.setup-column {
    min-width: 0;
}

/* COMMON CARD */
.dashboard-card {
    border: 1px solid #dce1e7;
    border-radius: 14px;
    background: #ffffff;
    box-shadow: 0 3px 7px rgba(0,0,0,.04);
    overflow: hidden;
}

/* WEBSITE PREVIEW */
.website-card h2 {
    padding: 20px 24px;
    font-size: 19px;
    color: #273443;
}

.website-preview {
    height: 260px;
    padding: 25px;
    background: linear-gradient(135deg, #8d9699, #293d4c);
    color: white;
}

.website-preview nav {
    background: #26374c;
    padding: 10px;
    margin: -25px -25px 25px;
    display: flex;
    justify-content: space-around;
    font-size: 11px;
}

.website-preview h3 {
    font-size: 21px;
    line-height: 1.4;
    max-width: 320px;
    margin-bottom: 15px;
}

.website-preview p {
    font-size: 12px;
}

.website-info {
    padding: 20px 25px;
}

.website-info p {
    margin-bottom: 23px;
    font-size: 15px;
    color: #536477;
}

.website-info i {
    color: #71849b;
    margin-right: 10px;
}

.website-info a {
    color: #3568c9;
    font-weight: bold;
    text-decoration: none;
}

/* MIDDLE COLUMN */
.setup-column {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* PROGRESS */
.progress-card {
    padding: 20px 24px;
    background: linear-gradient(120deg, #f2f6fa, #e3f2fc);
}

.progress-line {
    height: 12px;
    background: #dfe4e9;
    border-radius: 20px;
    margin-bottom: 20px;
}

.progress-info {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
}

.progress-info strong {
    font-size: 29px;
    color: #253447;
}

.progress-info span {
    font-weight: bold;
    color: #253447;
}

.phase {
    padding: 11px 16px;
    border-radius: 30px;
    background: white;
    white-space: nowrap;
}

/* TASK CARDS */
.task-card {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 24px;
    min-height: 115px;
}

.task-check {
    width: 27px;
    height: 27px;
    flex-shrink: 0;
    cursor: pointer;
}

.task-details {
    flex: 1;
    min-width: 0;
}

.task-details h3 {
    font-size: 16px;
    margin-bottom: 12px;
    color: #202c3c;
}

.task-details a {
    text-decoration: none;
    color: #63758b;
    font-size: 14px;
    margin-right: 8px;
}

.action-btn {
    background: #3963e9;
    color: white;
    border: none;
    border-radius: 30px;
    padding: 13px 22px;
    font-size: 14px;
    font-weight: bold;
    cursor: pointer;
    white-space: nowrap;
}

/* EXPLORE */
.explore-card {
    padding: 25px;
}

.explore-card h2 {
    font-size: 19px;
    padding-bottom: 20px;
    border-bottom: 1px solid #e0e4e8;
    margin-bottom: 20px;
}

.explore-link {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 19px 16px;
    border: 1px solid #dce1e7;
    border-radius: 12px;
    margin-bottom: 10px;
    color: #3d5067;
    text-decoration: none;
    font-size: 15px;
}

.explore-link i:first-child {
    color: #6482c6;
    margin-right: 12px;
}

.explore-link:hover {
    background: #f5f7fb;
}

.generate-btn {
    width: 100%;
    padding: 17px;
    border: none;
    border-radius: 10px;
    color: white;
    background: linear-gradient(100deg, #3764e8, #7539e6);
    font-size: 15px;
    font-weight: bold;
    cursor: pointer;
}

/* POWER UP SECTION */
.power-section {
    margin-top: 30px;
    border: 1px solid #dce1e7;
    border-radius: 14px;
    overflow: hidden;
}

.power-heading {
    padding: 18px 24px;
    background: #edf2f7;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.power-heading h2 {
    font-size: 18px;
    color: #354354;
}

.recommended {
    padding: 9px 18px;
    border-radius: 25px;
    background: #344459;
    color: white;
    font-size: 11px;
    font-weight: bold;
}

.power-items {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 15px;
    padding: 22px;
    min-width: 0;
}

.power-card {
    display: flex;
    align-items: center;
    gap: 15px;
    border: 1px solid #dce1e7;
    border-radius: 12px;
    padding: 15px;
    min-width: 0;
}

.power-image {
    width: 40%;
    min-height: 100px;
    background: linear-gradient(120deg, #192a48, #475d93);
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    font-size: 19px;
    font-weight: bold;
    border-radius: 9px;
    padding: 8px;
}

.power-details {
    flex: 1;
}

.power-details h3 {
    font-size: 14px;
    margin-bottom: 8px;
}

.power-details p {
    color: #718096;
    font-size: 13px;
    line-height: 1.4;
}

.power-details button {
    margin-top: 8px;
    background: #293747;
    color: white;
    border: none;
    border-radius: 20px;
    padding: 9px 17px;
    cursor: pointer;
}

/* RESPONSIVE */
@media(max-width: 1100px) {
    .dashboard-grid {
        grid-template-columns: 1fr 1fr;
    }

    .explore-card {
        grid-column: 1 / -1;
    }

    .power-items {
        grid-template-columns: 1fr;
    }
}

@media(max-width: 700px) {
    .dashboard-grid {
        grid-template-columns: 1fr;
    }

    .explore-card {
        grid-column: auto;
    }

    .start-title {
        width: 130px;
        min-width: 130px;
        font-size: 16px;
    }

    .start-description {
        font-size: 14px;
    }

    .task-card {
        padding: 15px;
    }
}
</style>


<div class="dashboard">

    <!-- START HERE -->
    <div class="start-banner">

        <div class="start-title">
            🚀 Start Here
        </div>

        <div class="start-description">
            Complete these one-time steps to ensure your site runs smoothly.
        </div>

    </div>


    <!-- DASHBOARD GRID -->
    <div class="dashboard-grid">

        <!-- WEBSITE PREVIEW -->
        <section class="dashboard-card website-card">

            <h2>Brilliant Directories Demo</h2>

            <div class="website-preview">

                <nav>
                    <span>Home</span>
                    <span>Search Directory</span>
                    <span>Members</span>
                    <span>Contact</span>
                </nav>

                <h3>
                    Your Idea. Your Directory.
                    Start Directories FOR ANY
                    Industry, Group or Location
                </h3>

                <p>Make your own professional online directory.</p>

            </div>

            <div class="website-info">

                <p>
                    <i class="fa-solid fa-link"></i>
                    <a href="#">launch58415.directoryup.com</a>
                </p>

                <p>
                    <i class="fa-regular fa-calendar"></i>
                    Start Date: <strong>Dec 11, 2025</strong>
                </p>

                <p>
                    <i class="fa-solid fa-users"></i>
                    Members: <strong>5</strong>
                </p>

                <p>
                    <i class="fa-regular fa-star"></i>
                    Plan: <strong>Lifetime Plan</strong>
                </p>

            </div>

        </section>


        <!-- SETUP COLUMN -->
        <div class="setup-column">

            <section class="dashboard-card progress-card">

                <div class="progress-line"></div>

                <div class="progress-info">
                    <strong>0%</strong>
                    <span>Basic Website Setup</span>
                    <span class="phase">Phase 1 of 2</span>
                </div>

            </section>


            <!-- TASK 1 -->
            <section class="dashboard-card task-card">

                <input type="checkbox" class="task-check">

                <div class="task-details">
                    <h3>1. Website Basics</h3>
                    <a href="#">Article ↗</a>
                    <a href="#">Video ▷</a>
                </div>

                <button class="action-btn">Edit Basics</button>

            </section>


            <!-- TASK 2 -->
            <section class="dashboard-card task-card">

                <input type="checkbox" class="task-check">

                <div class="task-details">
                    <h3>2. Add Business Listings</h3>
                    <a href="#">Article ↗</a>
                    <a href="#">Video ▷</a>
                </div>

                <button class="action-btn">Add Listings</button>

            </section>


            <!-- TASK 3 -->
            <section class="dashboard-card task-card">

                <input type="checkbox" class="task-check">

                <div class="task-details">
                    <h3>3. Connect Domain</h3>
                    <a href="#">Article ↗</a>
                    <a href="#">Video ▷</a>
                </div>

                <button class="action-btn">Connect Domain</button>

            </section>

        </div>


        <!-- EXPLORE SECTION -->
        <section class="dashboard-card explore-card">

            <h2>Explore What You Can Do</h2>

            <a href="#" class="explore-link">
                <span><i class="fa-solid fa-house"></i> Edit Homepage</span>
                <i class="fa-solid fa-chevron-right"></i>
            </a>

            <a href="#" class="explore-link">
                <span><i class="fa-solid fa-users"></i> View Members</span>
                <i class="fa-solid fa-chevron-right"></i>
            </a>

            <a href="#" class="explore-link">
                <span><i class="fa-solid fa-user-plus"></i> Test Member Sign Up</span>
                <i class="fa-solid fa-chevron-right"></i>
            </a>

            <a href="#" class="explore-link">
                <span><i class="fa-solid fa-palette"></i> Design & Layout</span>
                <i class="fa-solid fa-chevron-right"></i>
            </a>

            <a href="#" class="explore-link">
                <span><i class="fa-solid fa-gear"></i> General Settings</span>
                <i class="fa-solid fa-chevron-right"></i>
            </a>

            <button class="generate-btn">
                ✨ Generate Logo with AI
            </button>

        </section>

    </div>


    <!-- POWER UP SECTION -->
    <section class="power-section">

        <div class="power-heading">
            <h2>⚡ Power Up Your Site</h2>
            <span class="recommended">RECOMMENDED</span>
        </div>

        <div class="power-items">

            <div class="power-card">

                <div class="power-image">
                    ENHANCED HOSTING
                </div>

                <div class="power-details">
                    <h3>Enhanced Hosting - 50% Off</h3>
                    <p>Allow AI bots to crawl your site for better SEO visibility.</p>
                    <button>Activate</button>
                </div>

            </div>


            <div class="power-card">

                <div class="power-image">
                    AI CREDITS
                </div>

                <div class="power-details">
                    <h3>AI Credits Boost</h3>
                    <p>One-time credit packs from $10 — larger packs include bonuses.</p>
                    <button>Get It Now</button>
                </div>

            </div>


            <div class="power-card">

                <div class="power-image">
                    INSTANT BUSINESS DATA
                </div>

                <div class="power-details">
                    <h3>Business Data</h3>
                    <p>Add real local business data to your directory.</p>
                    <button>Get It Now</button>
                </div>

            </div>

        </div>

    </section>

</div>
