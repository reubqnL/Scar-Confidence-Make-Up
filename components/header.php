<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="utf-8">
    <title><?php echo "Scar Confidence | $pageTitle"?></title>
    <link rel="stylesheet" href="../style/global.css">
    <link rel="stylesheet" href="../style/<?php echo $pageCSS?>">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <!-- SEO -->
    <meta name="title" content="<?php echo $pageTitle?>">
    <meta name="description" content="<?php echo $pageDescription?>"
</head>

    <!-- Navigation Bar -->

<header>
    <nav>
        <a href="../pages/index.php" class="<?php if ($current_page == 'index') { echo 'active'; } ?>">Home</a>
        <a href="../pages/about.php" class="<?php if ($current_page == 'about') { echo 'active'; } ?>">About</a>
        <a href="../pages/services.php" class="<?php if ($current_page == 'services') { echo 'active'; } ?>">Services</a>
        <a href="../pages/directory.php" class="<?php if ($current_page == 'directory') { echo 'active'; } ?>">Directory</a>
        <a href="../pages/contact.php" class="<?php if ($current_page == 'contact') { echo 'active'; } ?>">Contact</a>
    </nav>
    <hr class="headerSeperator">

    <span class="header">
    <img src="../assets/icon.png" alt="Scar Confidence Icon">
        <h1>Scar Confidence</h1>
    </span>
</header>
</html>