
<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: auth/admin_login.php");
    exit();
}

$page = $_GET['page'] ?? 'dashboard';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Panel</title>

    <link rel="stylesheet" href="assests/css/index.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <?php if ($page === 'forms'): ?>
        <link rel="stylesheet" href="assests/css/forms.css">
    <?php endif; ?>

</head>

<body>

    <div class="admin-layout">

        <?php include 'components/header.php'; ?>

        <?php include 'components/subheader.php'; ?>

        <div class="content-layout">

            <?php include 'components/sidebar.php'; ?>

            <main class="main-content">

                <?php

                switch ($page) {

                    case 'dashboard':
                        include 'components/dashboard.php';
                        break;

                    case 'forms':
                        include 'components/forms.php';
                        break;

                    default:
                        include 'components/dashboard.php';
                        break;
                }

                ?>

            </main>

        </div>

    </div>

</body>
</html>
