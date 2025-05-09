<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PerangOnline SMP - Join the Adventure!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background: #23272a;
            color: #e2e2e2;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .minecraft-hero {
            background: url('https://wallpapercave.com/wp/wp2757874.jpg') center/cover no-repeat;
            min-height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .minecraft-hero::after {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(34, 40, 49, 0.6);
        }
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: #fff;
        }
        .hero-content h1 {
            font-size: 3rem;
            font-family: 'Minecraftia', monospace, Arial, sans-serif;
            letter-spacing: 2px;
            text-shadow: 2px 2px 8px #000;
        }
        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 6px #000;
        }
        .btn-mc {
            background: #62b34e;
            color: #fff;
            font-weight: 700;
            border-radius: 8px;
            font-size: 1.2rem;
            padding: 0.75rem 2.5rem;
            border: none;
            box-shadow: 0 4px 16px rgba(0,0,0,0.2);
            transition: background 0.2s;
        }
        .btn-mc:hover {
            background: #4e8c3a;
            color: #fff;
        }
        .section-title {
            font-family: 'Minecraftia', monospace, Arial, sans-serif;
            color: #62b34e;
            font-size: 2.2rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .player-grid img, .admin-img, .gallery-img, .history-img {
            border-radius: 8px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.25);
        }
        .player-grid .card {
            background: #2c2f33;
            border: none;
        }
        .admin-card {
            background: #2c2f33;
            border: none;
            text-align: center;
            padding: 1.5rem 1rem;
            border-radius: 12px;
        }
        .admin-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin-bottom: 1rem;
            border: 3px solid #62b34e;
        }
        .gallery-grid {
            column-count: 3;
            column-gap: 1rem;
        }
        .gallery-img {
            width: 100%;
            margin-bottom: 1rem;
            transition: transform 0.2s;
            cursor: pointer;
        }
        .gallery-img:hover {
            transform: scale(1.04) rotate(-2deg);
        }
        @media (max-width: 991.98px) {
            .gallery-grid { column-count: 2; }
        }
        @media (max-width: 767.98px) {
            .gallery-grid { column-count: 1; }
        }
        .history-timeline {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
        }
        .history-card {
            background: #2c2f33;
            border-radius: 10px;
            padding: 1rem;
            width: 300px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.18);
            text-align: center;
        }
        .history-img {
            width: 100%;
            height: 120px;
            object-fit: cover;
            margin-bottom: 0.7rem;
        }
        .footer-mc {
            background: #181a1b;
            color: #bdbdbd;
            padding: 2rem 0 1rem 0;
            font-size: 1rem;
            margin-top: 3rem;
        }
        .footer-mc a {
            color: #62b34e;
            text-decoration: none;
        }
        .footer-mc a:hover {
            text-decoration: underline;
        }
        .social-icons a {
            color: #bdbdbd;
            font-size: 1.5rem;
            margin-right: 1rem;
            transition: color 0.2s;
        }
        .social-icons a:hover {
            color: #62b34e;
        }
    </style>
    <!-- Optional: Minecraftia font for headings -->
    <link href="https://fonts.cdnfonts.com/css/minecraftia" rel="stylesheet">
</head>
<body>
    <!-- Hero Section -->
    <section class="minecraft-hero">
        <div class="container hero-content">
            <h1>PerangOnline SMP</h1>
            <p>Bosan main solo? Jom join PerangOnline SMP untuk build dan fight bersama member2 korang</p>
            <a href="#" class="btn btn-mc">Join Now</a>
        </div>
    </section>

    <!-- Player Showcase -->
    <section class="container py-5">
        <div class="section-title">Our Players</div>
        <div class="row row-cols-2 row-cols-md-4 g-4 player-grid">
            <div class="col">
                <div class="card p-2 text-center">
                    <img src="https://minotar.net/avatar/Notch/100" alt="Player 1" class="mx-auto" width="80">
                    <div class="fw-bold text-light">.Andrex</div>
                </div>
            </div>
            <div class="col">
                <div class="card p-2 text-center">
                    <img src="https://minotar.net/avatar/Dream/100" alt="Player 2" class="mx-auto" width="80">
                    <div class="fw-bold text-light">Aifiq</div>
                </div>
            </div>
            <div class="col">
                <div class="card p-2 text-center">
                    <img src="https://minotar.net/avatar/Technoblade/100" alt="Player 3" class="mx-auto" width="80">
                    <div class="fw-bold text-light">Hantu</div>
                </div>
            </div>
            <div class="col">
                <div class="card p-2 text-center">
                    <img src="https://minotar.net/avatar/Alex/100" alt="Player 4" class="mx-auto" width="80">
                    <div class="fw-bold text-light">Aufa</div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-light btn-sm">See All Players</a>
        </div>
    </section>

    <!-- Admin/Staff Section -->
    <section class="container py-5">
        <div class="section-title">Meet the Admins</div>
        <div class="row justify-content-center g-4">
            <div class="col-md-3">
                <div class="admin-card">
                    <img src="https://minotar.net/avatar/Admin/100" alt="Admin 1" class="admin-img">
                    <div class="fw-bold">Dauss</div>
                    <div class="fw-bold">Server Owner</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="admin-card">
                    <img src="https://minotar.net/avatar/Mod/100" alt="Admin 2" class="admin-img">
                    <div class="fw-bold">Enal</div>
                    <div class="fw-bold">Developer</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="admin-card">
                    <img src="https://minotar.net/avatar/Mod/100" alt="Admin 2" class="admin-img">
                    <div class="fw-bold">Haz</div>
                    <div class="fw-bold">Admin</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery/Event Highlights -->
    <section class="container py-5">
        <div class="section-title">Event Gallery</div>
        <div class="gallery-grid">
            <img src="https://static.planetminecraft.com/files/resource_media/screenshot/1234/minecraft-event-1_l.jpg" alt="Event 1" class="gallery-img">
            <img src="https://static.planetminecraft.com/files/resource_media/screenshot/1234/minecraft-event-2_l.jpg" alt="Event 2" class="gallery-img">
            <img src="https://static.planetminecraft.com/files/resource_media/screenshot/1234/minecraft-event-3_l.jpg" alt="Event 3" class="gallery-img">
            <img src="https://static.planetminecraft.com/files/resource_media/screenshot/1234/minecraft-event-4_l.jpg" alt="Event 4" class="gallery-img">
            <img src="https://static.planetminecraft.com/files/resource_media/screenshot/1234/minecraft-event-5_l.jpg" alt="Event 5" class="gallery-img">
            <img src="https://static.planetminecraft.com/files/resource_media/screenshot/1234/minecraft-event-6_l.jpg" alt="Event 6" class="gallery-img">
        </div>
    </section>

    <!-- History & Achievements -->
    <section class="container py-5">
        <div class="section-title">Server History & Achievements</div>
        <div class="history-timeline">
            <div class="history-card">
                <img src="https://static.planetminecraft.com/files/resource_media/screenshot/1234/minecraft-history-1_l.jpg" alt="History 1" class="history-img">
                <div class="fw-bold mt-2">Server Launch</div>
                <div class="text-muted">Jan 2022</div>
                <div>BlockWorld SMP goes live!</div>
            </div>
            <div class="history-card">
                <img src="https://static.planetminecraft.com/files/resource_media/screenshot/1234/minecraft-history-2_l.jpg" alt="History 2" class="history-img">
                <div class="fw-bold mt-2">First Event</div>
                <div class="text-muted">Feb 2022</div>
                <div>Our first building contest with 50+ players.</div>
            </div>
            <div class="history-card">
                <img src="https://static.planetminecraft.com/files/resource_media/screenshot/1234/minecraft-history-3_l.jpg" alt="History 3" class="history-img">
                <div class="fw-bold mt-2">Major Update</div>
                <div class="text-muted">Aug 2022</div>
                <div>Upgraded to Minecraft 1.20 with new features!</div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-mc">
        <div class="container">
            <div class="row align-items-center mb-3">
                <div class="col-md-6 mb-2 mb-md-0">
                    <span class="fw-bold">BlockWorld SMP</span> &copy; {{ date('Y') }}
                </div>
                <div class="col-md-6 text-md-end">
                    <span>Server IP: <span class="fw-bold">play.blockworld.com</span></span>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-discord"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <a href="#">Privacy Policy</a> | <a href="#">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 