<?php
require __DIR__ . '/../includes/auth.php';
redirectIfNotLoggedIn('../login.php');

$pdo = getDbConnection();
$counts = [
    'users' => $pdo->query('SELECT COUNT(*) FROM users')->fetchColumn(),
    'courses' => $pdo->query('SELECT COUNT(*) FROM courses')->fetchColumn(),
    'contacts' => $pdo->query('SELECT COUNT(*) FROM contacts')->fetchColumn(),
];

$students = $pdo->query('SELECT id, name, email, created_at FROM users ORDER BY created_at DESC LIMIT 5')->fetchAll();
$courses = $pdo->query('SELECT id, title, category FROM courses ORDER BY id DESC LIMIT 5')->fetchAll();
$messages = $pdo->query('SELECT id, name, email, message FROM contacts ORDER BY id DESC LIMIT 5')->fetchAll();
$admin = getCurrentAdmin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body class="admin-body">
    <aside class="sidebar">
        <div class="brand brand-admin">
            <span class="brand-mark">PHP</span>
            <span>Hub Admin</span>
        </div>
        <nav class="side-nav">
            <a class="active" href="dashboard.php">Dashboard</a>
            <a href="users.php">Users</a>
            <a href="courses.php">Courses</a>
            <a href="messages.php">Messages</a>
            <a href="../logout.php">Logout</a>
        </nav>
    </aside>

    <main class="admin-main">
        <header class="admin-topbar">
            <div>
                <p class="eyebrow">Admin Panel</p>
                <h1>Welcome, <?= htmlspecialchars($admin['name'] ?? 'Admin') ?></h1>
            </div>
            <a href="../logout.php" class="btn btn-outline">Logout</a>
        </header>

        <section class="admin-grid">
            <div class="stat-card">
                <span>Users</span>
                <strong><?= (int) $counts['users'] ?></strong>
            </div>
            <div class="stat-card">
                <span>Courses</span>
                <strong><?= (int) $counts['courses'] ?></strong>
            </div>
            <div class="stat-card">
                <span>Messages</span>
                <strong><?= (int) $counts['contacts'] ?></strong>
            </div>
        </section>

        <section class="panel-grid">
            <div class="panel">
                <h3>Recent Students</h3>
                <table>
                    <thead>
                        <tr><th>Name</th><th>Email</th><th>Joined</th></tr>
                    </thead>
                    <tbody>
                        <?php foreach ($students as $student): ?>
                            <tr>
                                <td><?= htmlspecialchars($student['name']) ?></td>
                                <td><?= htmlspecialchars($student['email']) ?></td>
                                <td><?= htmlspecialchars($student['created_at']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="panel">
                <h3>Latest Courses</h3>
                <ul class="list-box">
                    <?php foreach ($courses as $course): ?>
                        <li>
                            <strong><?= htmlspecialchars($course['title']) ?></strong><br>
                            <span><?= htmlspecialchars($course['category']) ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <section class="panel full-width">
            <h3>Recent Messages</h3>
            <table>
                <thead>
                    <tr><th>Name</th><th>Email</th><th>Message</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($messages as $message): ?>
                        <tr>
                            <td><?= htmlspecialchars($message['name']) ?></td>
                            <td><?= htmlspecialchars($message['email']) ?></td>
                            <td><?= htmlspecialchars($message['message']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
