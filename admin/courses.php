<?php
require __DIR__ . '/../includes/auth.php';
redirectIfNotLoggedIn('../login.php');

$pdo = getDbConnection();
$users = $pdo->query('SELECT id, name, email, role, created_at FROM users ORDER BY created_at DESC')->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users - Admin</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body class="admin-body">
    <aside class="sidebar">
        <div class="brand brand-admin">
            <span class="brand-mark">PHP</span>
            <span>Hub Admin</span>
        </div>
        <nav class="side-nav">
            <a href="dashboard.php">Dashboard</a>
            <a class="active" href="users.php">Users</a>
            <a href="courses.php">Courses</a>
            <a href="messages.php">Messages</a>
            <a href="../logout.php">Logout</a>
        </nav>
    </aside>

    <main class="admin-main">
        <header class="admin-topbar">
            <div>
                <p class="eyebrow">Admin Panel</p>
                <h1>Users</h1>
            </div>
        </header>

        <section class="panel full-width">
            <table>
                <thead>
                    <tr><th>ID</th><th>Name</th><th>Email</th><th>Role</th><th>Created</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= (int) $user['id'] ?></td>
                            <td><?= htmlspecialchars($user['name']) ?></td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td><?= htmlspecialchars($user['role']) ?></td>
                            <td><?= htmlspecialchars($user['created_at']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
