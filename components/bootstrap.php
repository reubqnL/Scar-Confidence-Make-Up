<?php

$config = require_once __DIR__ . '/../config/app.php';

function app_config(string $key, mixed $default = null): mixed
{
    global $config;
    return $config[$key] ?? $default;
}

function base_path_url(): string
{
    $configured = rtrim(str_replace('\\', '/', app_config('base_path', '')), '/');
    if ($configured !== '') {
        return $configured;
    }
    $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '/index.php');
    $directory = rtrim(dirname($script), '/');
    if (str_ends_with($directory, '/pages')) {
        $directory = substr($directory, 0, -6);
    }
    return $directory === '/' ? '' : $directory;
}

function url(string $path = ''): string
{
    return base_path_url() . '/' . ltrim($path, '/');
}

function asset(string $path): string
{
    $file = __DIR__ . '/../' . ltrim($path, '/');
    $version = is_file($file) ? (string) filemtime($file) : '';
    return url($path) . ($version !== '' ? '?v=' . $version : '');
}

function escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function is_development(): bool
{
    return app_config('environment') === 'development';
}

function vite_assets(string $entry): string
{
    if (is_development()) {
        return '<script type="module">' .
            'import RefreshRuntime from "/@react-refresh";' .
            'RefreshRuntime.injectIntoGlobalHook(window);' .
            'window.$RefreshReg$ = () => {};' .
            'window.$RefreshCheck$ = () => {};' .
            'window.__vite_plugin_react_preamble_installed__ = true;' .
            '</script>' .
            '<script type="module" src="/@vite/client"></script>' .
            '<script type="module" src="/' . escape($entry) . '"></script>';
    }
    $manifestPath = __DIR__ . '/../assets/build/.vite/manifest.json';
    if (!is_file($manifestPath)) {
        return '';
    }
    $manifest = json_decode(file_get_contents($manifestPath), true);
    $item = $manifest[$entry] ?? null;
    if (!$item) {
        return '';
    }
    $html = '';
    foreach (array_unique($item['css'] ?? []) as $css) {
        $html .= '<link rel="stylesheet" href="' . escape(asset('assets/build/' . $css)) . '">';
    }
    return $html . '<script type="module" src="' . escape(asset('assets/build/' . $item['file'])) . '"></script>';
}

function database(): ?mysqli
{
    $host = app_config('db_host');
    if ($host === '') {
        return null;
    }
    mysqli_report(MYSQLI_REPORT_OFF);
    $connection = @mysqli_connect(
        $host,
        app_config('db_user'),
        app_config('db_password'),
        app_config('db_name'),
        app_config('db_port')
    );
    if (!$connection) {
        error_log('Database connection failed: ' . mysqli_connect_error());
        return null;
    }
    mysqli_set_charset($connection, 'utf8mb4');
    return $connection;
}
