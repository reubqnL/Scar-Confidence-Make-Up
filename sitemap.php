<?php

require_once __DIR__ . '/components/bootstrap.php';

$origin = rtrim(app_config('app_url', ''), '/');
if ($origin === '' || !filter_var($origin, FILTER_VALIDATE_URL)) {
    http_response_code(503);
    header('Content-Type: text/plain; charset=UTF-8');
    exit('Set APP_URL to the public site URL to generate the sitemap.');
}

header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach (['index', 'about', 'services', 'directory', 'contact'] as $page): ?>
        <url><loc><?= escape($origin . url('pages/' . $page . '.php')) ?></loc></url>
    <?php endforeach; ?>
</urlset>
