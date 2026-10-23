<?php

$local = is_file(__DIR__ . '/local.php') ? require __DIR__ . '/local.php' : [];

return array_replace([
    'environment' => getenv('APP_ENV') ?: 'production',
    'base_path' => getenv('APP_BASE_PATH') ?: '',
    'app_url' => getenv('APP_URL') ?: '',
    'db_host' => getenv('DB_HOST') !== false ? getenv('DB_HOST') : '',
    'db_port' => (int) (getenv('DB_PORT') ?: 3306),
    'db_name' => getenv('DB_NAME') ?: 'scar_confidence',
    'db_user' => getenv('DB_USER') ?: 'root',
    'db_password' => getenv('DB_PASSWORD') ?: '',
], $local);
