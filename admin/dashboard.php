<?php
require __DIR__ . '/session.php';
require __DIR__ . '/db.php';

function isLoggedIn(): bool
{
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

function redirectIfNotLoggedIn(string $redirectPath = 'login.php'): void
{
    if (!isLoggedIn()) {
        header('Location: ' . $redirectPath);
        exit;
    }
}

function getCurrentAdmin(): ?array
{
    if (!isLoggedIn() || empty($_SESSION['admin_email'])) {
        return null;
    }

    try {
        $pdo = getDbConnection();
        $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email AND role = "admin" LIMIT 1');
        $stmt->execute(['email' => $_SESSION['admin_email']]);
        $user = $stmt->fetch();
        return $user ?: null;
    } catch (Throwable $e) {
        return null;
    }
}
