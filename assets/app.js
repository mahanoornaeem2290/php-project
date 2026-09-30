body {
    margin: 0;
    font-family: 'Inter', sans-serif;
    background: linear-gradient(135deg, #07131f 0%, #0d1b2a 35%, #111827 100%);
    color: #edf6ff;
}

* { box-sizing: border-box; }

a { color: inherit; text-decoration: none; }

.container {
    width: min(1120px, calc(100% - 32px));
    margin: 0 auto;
}

.site-header {
    position: sticky;
    top: 0;
    z-index: 10;
    backdrop-filter: blur(20px);
    background: rgba(10, 15, 26, 0.75);
    border-bottom: 1px solid rgba(255,255,255,0.08);
}

.nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    min-height: 80px;
}

.brand {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    font-size: 1.1rem;
    font-weight: 700;
}

.brand-mark {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 42px;
    border-radius: 12px;
    background: linear-gradient(135deg, #7c3aed, #22d3ee);
    box-shadow: 0 14px 28px rgba(34, 211, 238, 0.25);
    font-size: 0.82rem;
}

nav {
    display: flex;
    gap: 28px;
    color: #c9d6ea;
}

nav a:hover { color: #fff; }

.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: none;
    border-radius: 12px;
    padding: 0.9rem 1.4rem;
    cursor: pointer;
    font-weight: 600;
    transition: 0.25s ease;
}

.btn:hover { transform: translateY(-1px); }

.btn-primary {
    background: linear-gradient(135deg, #7c3aed, #2563eb);
    color: white;
    box-shadow: 0 18px 30px rgba(124, 58, 237, 0.35);
}

.btn-secondary, .btn-outline {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.12);
    color: #edf6ff;
}

.hero {
    padding: 92px 0 72px;
    background:
        radial-gradient(circle at top left, rgba(34, 211, 238, 0.2), transparent 25%),
        radial-gradient(circle at bottom right, rgba(124, 58, 237, 0.3), transparent 30%);
}

.hero-grid {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    align-items: center;
    gap: 40px;
}

.eyebrow {
    margin-bottom: 12px;
    color: #67e8f9;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    font-size: 0.74rem;
    font-weight: 700;
}

.hero-copy h1 {
    font-size: clamp(2.7rem, 5vw, 4.5rem);
    line-height: 1.05;
    margin: 0 0 20px;
}

.lead {
    color: #bfd1e7;
    font-size: 1.08rem;
    line-height: 1.8;
    max-width: 640px;
}

.cta-group {
    display: flex;
    gap: 18px;
    margin-top: 28px;
}

.stats-row {
    display: flex;
    gap: 30px;
    margin-top: 34px;
    flex-wrap: wrap;
}

.stats-row div {
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.stats-row strong {
    font-size: 1.7rem;
}

.stats-row span {
    color: #c2d1e7;
}

.glass-card {
    background: rgba(15, 23, 42, 0.72);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 28px;
    padding: 26px;
    box-shadow: 0 22px 50px rgba(2, 6, 23, 0.7);
}

.mini-label {
    display: inline-flex;
    padding: 0.45rem 0.8rem;
    background: rgba(99, 102, 241, 0.12);
    color: #b5c4ff;
    border-radius: 999px;
    font-size: 0.72rem;
    margin-bottom: 18px;
}

.glass-card h3 {
    margin: 0 0 18px;
    font-size: 1.8rem;
}

.glass-card ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
    color: #dfeaf7;
    display: grid;
    gap: 10px;
}

.glass-card li::before {
    content: '•';
    color: #67e8f9;
    margin-right: 10px;
}

.progress-block {
    margin-top: 18px;
}

.progress-head {
    display: flex;
    justify-content: space-between;
    margin-bottom: 8px;
    color: #dfeaf7;
}

.progress-bar {
    height: 12px;
    background: rgba(255,255,255,0.08);
    border-radius: 999px;
    overflow: hidden;
}

.progress-bar span {
    display: block;
    width: 78%;
    height: 100%;
    background: linear-gradient(90deg, #22d3ee, #8b5cf6);
    border-radius: inherit;
}

.features, .courses, .about {
    padding: 90px 0;
}

.section-heading {
    text-align: center;
    margin-bottom: 34px;
}

.section-heading h2 {
    font-size: clamp(2rem, 4vw, 3rem);
    margin: 0;
}

.feature-grid, .course-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 22px;
}

.feature-box, .course-card, .panel, .stat-card {
    background: rgba(15, 23, 42, 0.7);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 22px;
    padding: 24px;
}

.icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: linear-gradient(135deg, rgba(34,211,238,0.2), rgba(124,58,237,0.2));
    margin-bottom: 18px;
    font-weight: 700;
}

.course-card .tag {
    display: inline-flex;
    background: rgba(34, 197, 94, 0.12);
    border: 1px solid rgba(34, 197, 94, 0.22);
    color: #86efac;
    border-radius: 999px;
    padding: 0.4rem 0.75rem;
    font-size: 0.72rem;
}

.course-card h3 {
    margin: 18px 0 10px;
}

.course-card p, .feature-box p, .about p, .muted, .helper-text {
    color: #c8d8ea;
    line-height: 1.7;
}

.split-layout {
    display: grid;
    grid-template-columns: 1.3fr 0.7fr;
    gap: 24px;
    align-items: center;
}

.info-panel {
    display: grid;
    gap: 14px;
}

.info-panel > div {
    display: flex;
    flex-direction: column;
    gap: 8px;
    background: rgba(15, 23, 42, 0.7);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 18px;
    padding: 22px;
}

.site-footer {
    padding: 30px 0 60px;
}

.footer-wrap {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top: 1px solid rgba(255,255,255,0.08);
    padding-top: 20px;
}

.auth-page {
    min-height: 100vh;
    display: grid;
    place-items: center;
    background: radial-gradient(circle at top, rgba(59,130,246,0.25), transparent 25%), linear-gradient(135deg, #070d18, #101827);
}

.auth-shell {
    width: min(480px, calc(100% - 28px));
}

.auth-card {
    background: rgba(15, 23, 42, 0.8);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 24px;
    padding: 28px;
    box-shadow: 0 24px 50px rgba(15, 23, 42, 0.7);
}

.brand-auth {
    justify-content: center;
    margin-bottom: 18px;
}

.auth-card h1 {
    text-align: center;
    margin: 0 0 10px;
}

.auth-form {
    display: grid;
    gap: 18px;
    margin-top: 20px;
}

.auth-form label {
    display: grid;
    gap: 8px;
    font-weight: 600;
}

.auth-form input {
    width: 100%;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.08);
    background: rgba(255,255,255,0.04);
    color: white;
    padding: 0.9rem 1rem;
    font: inherit;
}

.full-width { width: 100%; }

.alert-danger {
    padding: 0.8rem 1rem;
    margin-top: 16px;
    border-radius: 12px;
    background: rgba(239,68,68,0.12);
    border: 1px solid rgba(239,68,68,0.3);
    color: #fecaca;
}

.helper-text {
    text-align: center;
    margin-top: 18px;
}

.back-link {
    display: inline-block;
    margin-top: 14px;
    color: #9ad7ff;
}

.admin-body {
    display: flex;
    min-height: 100vh;
}

.sidebar {
    width: 260px;
    background: rgba(10, 15, 26, 0.9);
    border-right: 1px solid rgba(255,255,255,0.06);
    padding: 24px 18px;
}

.brand-admin {
    padding: 8px 12px 22px;
}

.side-nav {
    display: grid;
    gap: 8px;
    margin-top: 16px;
}

.side-nav a {
    padding: 0.9rem 1rem;
    border-radius: 12px;
    color: #d6e3f3;
    transition: 0.2s ease;
}

.side-nav a.active, .side-nav a:hover {
    background: rgba(99,102,241,0.12);
    color: #fff;
}

.admin-main {
    flex: 1;
    padding: 28px;
}

.admin-topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
}

.admin-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 20px;
    margin-bottom: 24px;
}

.stat-card {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.stat-card span {
    color: #a8c0db;
}

.stat-card strong {
    font-size: 2.2rem;
}

.panel-grid {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 24px;
    margin-bottom: 24px;
}

.panel h3 {
    margin-top: 0;
}

table {
    width: 100%;
    border-collapse: collapse;
    overflow: hidden;
}

th, td {
    padding: 0.85rem 0.75rem;
    border-bottom: 1px solid rgba(255,255,255,0.08);
    text-align: left;
    vertical-align: top;
}

th {
    color: #9fe4ff;
    font-size: 0.78rem;
    text-transform: uppercase;
    letter-spacing: 0.08em;
}

.list-box {
    list-style: none;
    margin: 0;
    padding: 0;
    display: grid;
    gap: 12px;
}

.list-box li {
    padding-bottom: 12px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
}

.full-width { width: 100%; }

@media (max-width: 900px) {
    .hero-grid, .feature-grid, .course-grid, .split-layout, .panel-grid, .admin-grid {
        grid-template-columns: 1fr;
    }

    .admin-body {
        display: block;
    }

    .sidebar {
        width: 100%;
    }

    nav {
        display: none;
    }

    .footer-wrap, .admin-topbar {
        flex-direction: column;
        gap: 16px;
        align-items: flex-start;
    }
}
