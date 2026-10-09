<?php
declare(strict_types=1);
function db(): PDO {
    static $pdo;
    if ($pdo instanceof PDO) return $pdo;
    $configFile = dirname(__DIR__) . '/config/config.php';
    if (!is_file($configFile)) throw new RuntimeException('Copy config/config.example.php to config/config.php and add database credentials.');
    $config = require $configFile;
    $pdo = new PDO('mysql:host='.$config['db_host'].';dbname='.$config['db_name'].';charset=utf8mb4', $config['db_user'], $config['db_pass'], [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);
    return $pdo;
}

