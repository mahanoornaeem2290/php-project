<?php
require __DIR__ . '/includes/session.php';
require __DIR__ . '/includes/db.php';

$pdo = getDbConnection();
$stmt = $pdo->query('SELECT COUNT(*) FROM users');
$totalUsers = (int) $stmt->fetchColumn();

$stmt = $pdo->query('SELECT COUNT(*) FROM courses');
$totalCourses = (int) $stmt->fetchColumn();

$stmt = $pdo->query('SELECT COUNT(*) FROM contacts');
$totalMessages = (int) $stmt->fetchColumn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Hub of PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <header class="site-header">
        <div class="container nav">
            <div class="brand">
                <span class="brand-mark">PHP</span>
                <span>Learning Hub</span>
            </div>
            <nav>
                <a href="#features">Features</a>
                <a href="#courses">Courses</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </nav>
            <div class="nav-actions">
                <a class="btn btn-secondary" href="login.php">Admin Login</a>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-copy">
                    <p class="eyebrow">Learn PHP the practical way</p>
                    <h1>Build strong backend skills with real-world PHP projects.</h1>
                    <p class="lead">
                        Explore modern PHP concepts, coding exercises, database integration, and admin workflows in one complete learning platform.
                    </p>
                    <div class="cta-group">
                        <a class="btn btn-primary" href="#courses">Explore Courses</a>
                        <a class="btn btn-outline" href="login.php">Open Admin Panel</a>
                    </div>
                    <div class="stats-row">
                        <div>
                            <strong><?= $totalCourses ?></strong>
                            <span>Courses</span>
                        </div>
                        <div>
                            <strong><?= $totalUsers ?></strong>
                            <span>Students</span>
                        </div>
                        <div>
                            <strong><?= $totalMessages ?></strong>
                            <span>Messages</span>
                        </div>
                    </div>
                </div>
                <div class="hero-card">
                    <div class="glass-card">
                        <div class="mini-label">Today’s focus</div>
                        <h3>PHP MySQL Integration</h3>
                        <ul>
                            <li>Connect database securely</li>
                            <li>Use sessions for login</li>
                            <li>Manage data in admin panel</li>
                        </ul>
                        <div class="progress-block">
                            <div class="progress-head">
                                <span>Course progress</span>
                                <span>78%</span>
                            </div>
                            <div class="progress-bar"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="features">
            <div class="container">
                <div class="section-heading">
                    <p class="eyebrow">Why this platform</p>
                    <h2>Everything needed for modern PHP learning</h2>
                </div>
                <div class="feature-grid">
                    <article class="feature-box">
                        <div class="icon">DB</div>
                        <h3>Database Ready</h3>
                        <p>Built-in MySQL connection examples, CRUD operations, and data flow fundamentals.</p>
                    </article>
                    <article class="feature-box">
                        <div class="icon">🔐</div>
                        <h3>Login & Sessions</h3>
                        <p>Admin authentication with secure PHP session storage and protected dashboard access.</p>
                    </article>
                    <article class="feature-box">
                        <div class="icon">⚙️</div>
                        <h3>Admin Control</h3>
                        <p>Manage records, monitor activity, and keep the learning hub organized and professional.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="courses" class="courses">
            <div class="container">
                <div class="section-heading">
                    <p class="eyebrow">Course library</p>
                    <h2>Practical PHP topics</h2>
                </div>
                <div class="course-grid">
                    <div class="course-card">
                        <span class="tag">Core</span>
                        <h3>PHP Fundamentals</h3>
                        <p>Variables, loops, arrays, functions, OOP, and syntax mastery.</p>
                    </div>
                    <div class="course-card">
                        <span class="tag">Database</span>
                        <h3>MySQL & Queries</h3>
                        <p>Understand joins, select, insert, update, and relationship design.</p>
                    </div>
                    <div class="course-card">
                        <span class="tag">Web</span>
                        <h3>Forms & Security</h3>
                        <p>Sanitize inputs, validate forms, and create safe user experiences.</p>
                    </div>
                    <div class="course-card">
                        <span class="tag">Admin</span>
                        <h3>Dashboard & Reports</h3>
                        <p>Build dashboards to monitor learning data and admin actions.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container split-layout">
                <div>
                    <p class="eyebrow">Learning philosophy</p>
                    <h2>Learn by doing, not just reading.</h2>
                    <p>
                        This platform combines theory and practical implementation so students can learn essential PHP concepts while building real-world web solutions.
                    </p>
                </div>
                <div class="info-panel">
                    <div>
                        <strong>Modern stack</strong>
                        <span>PHP 8.x, MySQL, HTML5, CSS3, JavaScript</span>
                    </div>
                    <div>
                        <strong>Session handling</strong>
                        <span>Protected admin routes and secure login flows</span>
                    </div>
                    <div>
                        <strong>Scalable design</strong>
                        <span>Ready for future learning modules and features</span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="contact" class="site-footer">
        <div class="container footer-wrap">
            <div>
                <h3>Learning Hub of PHP</h3>
                <p>Practical learning for PHP developers.</p>
            </div>
            <div>
                <a href="login.php" class="btn btn-primary">Admin Panel</a>
            </div>
        </div>
    </footer>

    <script src="assets/app.js"></script>
</body>
</html>
