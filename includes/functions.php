<?php
declare(strict_types=1);
function e(string $value): string { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
function csrf_token(): string {
    if (session_status() !== PHP_SESSION_ACTIVE) session_start();
    if (empty($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(24));
    return $_SESSION['csrf'];
}
function csrf_valid(?string $token): bool {
    if (session_status() !== PHP_SESSION_ACTIVE) session_start();
    return is_string($token) && isset($_SESSION['csrf']) && hash_equals($_SESSION['csrf'], $token);
}
function reference_code(): string { return 'AH-' . date('Ymd') . '-' . strtoupper(bin2hex(random_bytes(3))); }

