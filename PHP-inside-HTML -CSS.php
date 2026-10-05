<?php
// Data preparation at the top
$pageTitle = "User Profile";
$badgeBg = "#10b981"; // Emerald green
$username = "Rasel Ahmed";
$role = "Full-Stack Developer";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $pageTitle ?></title>
    <style>
        body { font-family: sans-serif; background: #0f172a; color: #f8fafc; padding: 24px; }
        .badge {
            /* Dynamic CSS property injected via PHP */
            background-color: <?= $badgeBg ?>;
            color: #ffffff;
            padding: 4px 10px;
            border-radius: 9999px;
            font-size: 12px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Dynamic text injected via PHP short tags -->
    <h1><?= $username ?></h1>
    <span class="badge"><?= $role ?></span>
</body>
</html>