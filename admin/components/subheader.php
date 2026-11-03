
<style>
.subheader {
    position: fixed;
    top: 65px;
    left: 278px;
    width: calc(100% - 278px);
    z-index: 1900;
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;
}

.sale-bar {
    height: 40px;
    padding: 0 14px;
    background: linear-gradient(100deg, #123f3c, #203747);
    color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-sizing: border-box;
}

.sale-left {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    font-weight: bold;
    white-space: nowrap;
}

.sale-right {
    display: flex;
    align-items: center;
    gap: 10px;
    white-space: nowrap;
}

.sale-details {
    text-align: right;
    font-size: 12px;
    line-height: 15px;
}

.buy-now-btn {
    background: #ffdf35;
    color: #222;
    border: none;
    border-radius: 4px;
    padding: 7px 10px;
    font-size: 12px;
    font-weight: bold;
    cursor: pointer;
}

.status-bar {
    height: 30px;
    padding: 0 14px;
    background: #f4f5f6;
    border-bottom: 1px solid #d9dce0;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 15px;
    box-sizing: border-box;
    color: #718096;
    font-size: 10px;
}

.status-item {
    white-space: nowrap;
}

.refresh-btn {
    background: #344b5c;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 5px 9px;
    font-size: 10px;
    cursor: pointer;
    white-space: nowrap;
}

.refresh-btn:hover {
    background: #223746;
}

@media(max-width: 650px) {
    .sale-bar {
        padding: 0 8px;
        font-size: 11px;
    }

    .sale-details {
        display: none;
    }

    .status-bar {
        gap: 7px;
        padding: 0 6px;
        font-size: 9px;
    }
}
</style>

<div class="subheader">

    <div class="sale-bar">

        <div class="sale-left">
            <span>⚡</span>
            <span>24-Hour Flash Sale</span>
        </div>

        <div class="sale-right">

            <div class="sale-details">
                <div>[FLASH SALE] Lifetime Sites $249</div>
                <div>Ends Today - November 2, 2026</div>
            </div>

            <button type="button" class="buy-now-btn"
                onclick="window.location.href='#'">
                $249 BUY NOW
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </button>

        </div>

    </div>

    <div class="status-bar">

        <span class="status-item">
            Build Version: 4.0
        </span>

        <span class="status-item">
            Website Time:
            <span id="website-time">Loading...</span>
        </span>

        <button type="button" class="refresh-btn"
            onclick="window.location.reload()">
            <i class="fa-solid fa-rotate"></i>
            Refresh Live Site
        </button>

    </div>

</div>

<script>
(function () {
    function updateWebsiteTime() {
        const timeElement = document.getElementById('website-time');

        if (!timeElement) return;

        const now = new Date();

        const formattedTime = new Intl.DateTimeFormat('en-IN', {
            weekday: 'short',
            month: 'short',
            day: '2-digit',
            year: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: false,
            timeZone: 'Asia/Kolkata'
        }).format(now);

        timeElement.textContent = formattedTime + ' UTC+05:30';
    }

    updateWebsiteTime();
    setInterval(updateWebsiteTime, 1000);
})();
</script>
