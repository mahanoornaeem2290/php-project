<?php
require __DIR__ . '/../includes/auth.php';
redirectIfNotLoggedIn('../login.php');

$pdo = getDbConnection();
$courses = $pdo->query('SELECT id, title, category, description, created_at FROM courses ORDER BY created_at DESC')->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses - Admin</title>
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
            <a href="users.php">Users</a>
            <a class="active" href="courses.php">Courses</a>
            <a href="messages.php">Messages</a>
            <a href="../logout.php">Logout</a>
        </nav>
    </aside>

    <main class="admin-main">
        <header class="admin-topbar">
            <div>
                <p class="eyebrow">Admin Panel</p>
                <h1>Courses</h1>
            </div>
        </header>

        <section class="panel full-width">
            <table>
                <thead>
                    <tr><th>ID</th><th>Title</th><th>Category</th><th>Description</th><th>Created</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($courses as $course): ?>
                        <tr>
                            <td><?= (int) $course['id'] ?></td>
                            <td><?= htmlspecialchars($course['title']) ?></td>
                            <td><?= htmlspecialchars($course['category']) ?></td>
                            <td><?= htmlspecialchars($course['description']) ?></td>
                            <td><?= htmlspecialchars($course['created_at']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
