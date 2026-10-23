<?php

$root = __DIR__;
$path = rawurldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');
$file = realpath($root . $path);
$public = preg_match('#^/(assets|style)/#', $path)
    || $path === '/scripts/buttons.js'
    || $path === '/favicon.ico';

if ($path === '/sitemap.xml') {
    $_SERVER['SCRIPT_NAME'] = '/sitemap.php';
    require $root . '/sitemap.php';
    return true;
}

if ($path !== '/' && $file && str_starts_with($file, $root . DIRECTORY_SEPARATOR) && is_file($file)) {
    if ($public && !str_ends_with($file, '.php')) {
        return false;
    }
    if (preg_match('#^/(index|process)\.php$#', $path) || preg_match('#^/pages/[a-z0-9-]+\.php$#i', $path)) {
        $_SERVER['SCRIPT_NAME'] = $path;
        $_SERVER['SCRIPT_FILENAME'] = $file;
        require $file;
        return true;
    }
}

$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['SCRIPT_FILENAME'] = $root . '/index.php';
require $root . '/index.php';
