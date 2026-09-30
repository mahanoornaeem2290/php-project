<?php
require __DIR__ . '/includes/session.php';
require __DIR__ . '/includes/db.php';

$config = require __DIR__ . '/config.php';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($email === $config['app']['admin_email'] && $password === $config['app']['admin_password']) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_email'] = $email;
        header('Location: admin/dashboard.php');
        exit;
    }

    try {
        $pdo = getDbConnection();
        $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email AND password = :password LIMIT 1');
        $stmt->execute([
            'email' => $email,
            'password' => hash('sha256', $password),
        ]);
        $user = $stmt->fetch();

        if ($user) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_email'] = $user['email'];
            header('Location: admin/dashboard.php');
            exit;
        }
    } catch (Throwable $e) {
        $error = 'Database connection or user table is not ready yet.';
    }

    $error = 'Invalid email or password.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body class="auth-page">
    <div class="auth-shell">
        <div class="auth-card">
            <div class="brand brand-auth">
                <span class="brand-mark">PHP</span>
                <span>Learning Hub</span>
            </div>
            <h1>Admin Login</h1>
            <p class="muted">Access the learning platform dashboard.</p>

            <?php if ($error): ?>
                <div class="alert-danger"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <form method="POST" class="auth-form">
                <label>
                    <span>Email</span>
                    <input type="email" name="email" placeholder="admin@learninghub.test" required>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" placeholder="Enter password" required>
                </label>
                <button type="submit" class="btn btn-primary full-width">Login</button>
            </form>

            <p class="helper-text">Demo login: admin@learninghub.test / admin123</p>
            <a href="index.php" class="back-link">← Back to homepage</a>
        </div>
    </div>
</body>
</html>
