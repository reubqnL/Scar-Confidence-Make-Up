<?php require_once __DIR__ . '/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= escape("Scar Confidence | $pageTitle") ?></title>
    <link rel="icon" href="<?= escape(asset('assets/icon.png')) ?>" type="image/png">
    <link rel="stylesheet" href="<?= escape(asset('style/global.css')) ?>">
    <link rel="stylesheet" href="<?= escape(asset('style/' . $pageCSS)) ?>">

    <!-- SEO -->
    <meta name="title" content="<?= escape($pageTitle) ?>">
    <meta name="description" content="<?= escape($pageDescription) ?>">
</head>
<body class="page-<?= escape($current_page) ?>">
<a class="skip-link" href="#main-content">Skip to content</a>

<!-- Navigation Bar -->
<header>
    <div class="headerTop">
        <a class="header" href="<?= escape(url('pages/index.php')) ?>">
            <img src="<?= escape(asset('assets/icon.png')) ?>" alt="" width="45" height="44">
            <span class="brand-name">Scar Confidence</span>
        </a>
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation">
            <span class="menu-toggle-label">Menu</span>
            <span aria-hidden="true">☰</span>
        </button>
        <nav id="primary-navigation" aria-label="Main navigation">
            <?php foreach (['index' => 'Home', 'about' => 'About', 'services' => 'Services', 'directory' => 'Directory', 'contact' => 'Contact'] as $page => $label): ?>
                <a href="<?= escape(url('pages/' . $page . '.php')) ?>"<?= $current_page === $page ? ' class="active" aria-current="page"' : '' ?>><?= $label ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
    <hr class="headerSeparator">
</header>
