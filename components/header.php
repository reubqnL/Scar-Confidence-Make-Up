<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="utf-8">
    <title><?php echo "Scar Confidence | $pageTitle"?></title>
    <link rel="stylesheet" href="../style/global.css">
    <link rel="stylesheet" href="../style/<?php echo $pageCSS?>">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- SEO -->
    <meta name="title" content="<?php echo $pageTitle?>">
    <meta name="description" content="<?php echo $pageDescription?>">
</head>
<body>

<!-- Navigation Bar -->
<header>
    <div class="headerTop">
        <nav>
            <a href="../pages/index.php" class="<?php if ($current_page == 'index') { echo 'active'; } ?>">Home</a>
            <a href="../pages/about.php" class="<?php if ($current_page == 'about') { echo 'active'; } ?>">About</a>
            <a href="../pages/services.php" class="<?php if ($current_page == 'services') { echo 'active'; } ?>">Services</a>
            <a href="../pages/directory.php" class="<?php if ($current_page == 'directory') { echo 'active'; } ?>">Directory</a>
            <a href="../pages/contact.php" class="<?php if ($current_page == 'contact') { echo 'active'; } ?>">Contact</a>
        </nav>

        <a class="header" href="../pages/index.php" style="text-decoration: none;">
            <img src="../assets/icon.png" alt="Scar Confidence Icon">
            <h1>Scar Confidence</h1>
        </a>
    </div>

    <hr class="headerSeparator">
</header>