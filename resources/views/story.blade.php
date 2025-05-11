<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Story - PerangOnline SMP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.cdnfonts.com/css/minecraftia" rel="stylesheet">
    <style>
        body { background: #23272a; color: #e2e2e2; font-family: 'Segoe UI', Arial, sans-serif; }
        .story-hero { background: url('https://wallpapercave.com/wp/wp2757874.jpg') center/cover no-repeat; min-height: 35vh; display: flex; align-items: center; justify-content: center; position: relative; }
        .story-hero::after { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(34, 40, 49, 0.7); }
        .story-content { position: relative; z-index: 2; text-align: center; color: #fff; }
        .story-content h1 { font-size: 2.5rem; font-family: 'Minecraftia', monospace, Arial, sans-serif; letter-spacing: 2px; text-shadow: 2px 2px 8px #000; }
        .section-title { font-family: 'Minecraftia', monospace, Arial, sans-serif; color: #62b34e; font-size: 2rem; margin: 2rem 0 1rem 0; text-align: center; }
        .appreciation-card { background: #2c2f33; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.18); padding: 1.5rem; margin: 1.5rem auto; max-width: 600px; text-align: center; }
        .season-list { background: #181a1b; border-radius: 10px; padding: 1rem 1.5rem; margin: 1.5rem auto; max-width: 500px; color: #ffd700; font-size: 1.1rem; }
        .back-link { color: #62b34e; text-decoration: none; font-size: 1.1rem; }
        .back-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background:#23272a; box-shadow:0 2px 8px rgba(0,0,0,0.12);">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="/images/logo.png" alt="Server Logo" style="height:40px; width:40px; object-fit:cover; border-radius:8px; margin-right:12px; background:#181a1b;" onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';">
                <span style="font-family:'Minecraftia',monospace,Arial,sans-serif; font-size:1.5rem; color:#62b34e; display:none;">PerangOnline SMP</span>
            </a>
            <div class="ms-auto d-flex align-items-center gap-3">
                <a href="/story" class="nav-link" style="color:#e2e2e2; font-weight:500;">Story</a>
                <a href="/gallery" class="nav-link" style="color:#e2e2e2; font-weight:500;">Gallery</a>
                <a href="/build" class="nav-link" style="color:#e2e2e2; font-weight:500;">Build</a>
            </div>
        </div>
    </nav>
    <section class="story-hero">
        <div class="container story-content">
            <h1>Our Story</h1>
            <p>Discover the journey of PerangOnline SMP!</p>
        </div>
    </section>
    <div class="container">
        <div class="section-title">How It Started</div>
        <div class="appreciation-card">
            <p>PerangOnline SMP was founded in early 2022 by a group of passionate Minecraft players who wanted to create a fun, friendly, and competitive survival multiplayer experience for everyone. What started as a small group of friends quickly grew into a vibrant community full of creativity, teamwork, and epic battles!</p>
        </div>
        <div class="section-title">Seasons</div>
        <div class="season-list">
            <ul class="list-unstyled mb-0">
                <li><b>Season 1:</b> The Beginning (Jan 2022 - May 2022)</li>
                <li><b>Season 2:</b> The Great Expansion (Jun 2022 - Dec 2022)</li>
                <li><b>Season 3:</b> New Adventures (Jan 2023 - Present)</li>
            </ul>
        </div>
        <div class="section-title">Appreciation</div>
        <div class="appreciation-card">
            <p>Thank you to all our players, staff, and supporters who have made PerangOnline SMP what it is today. Your builds, stories, and friendships are the heart of our server. Special thanks to our admins, moderators, and everyone who has contributed to the community!</p>
        </div>
        <div class="section-title">More About Us</div>
        <div class="appreciation-card">
            <p>We host regular events, building contests, and seasonal resets to keep things fresh and exciting. Whether you love building, PvP, or just hanging out, there's a place for you here. Join us and become part of our story!</p>
        </div>
        <div class="text-center mt-4">
            <a href="/" class="back-link"><i class="bi bi-arrow-left"></i> Back to Home</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 