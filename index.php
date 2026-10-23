<?php

require __DIR__ . '/components/bootstrap.php';

$path = rawurldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');
$base = base_path_url();
if ($base !== '' && str_starts_with($path, $base . '/')) {
    $path = substr($path, strlen($base));
}

if ($path === '/' || $path === '/index.php') {
    header('Location: ' . url('pages/index.php'), true, 302);
    exit;
}

http_response_code(404);
require __DIR__ . '/pages/404.php';
