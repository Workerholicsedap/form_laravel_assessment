<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - PerangOnline SMP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.cdnfonts.com/css/minecraftia" rel="stylesheet">
    <style>
        body { background: #23272a; color: #e2e2e2; font-family: 'Segoe UI', Arial, sans-serif; }
        .gallery-hero { background: url('https://wallpapercave.com/wp/wp2757874.jpg') center/cover no-repeat; min-height: 30vh; display: flex; align-items: center; justify-content: center; position: relative; }
        .gallery-hero::after { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(34, 40, 49, 0.7); }
        .gallery-content { position: relative; z-index: 2; text-align: center; color: #fff; }
        .gallery-content h1 { font-size: 2.2rem; font-family: 'Minecraftia', monospace, Arial, sans-serif; letter-spacing: 2px; text-shadow: 2px 2px 8px #000; }
        .carousel-inner img { border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.25); max-height: 500px; object-fit: cover; margin: auto; }
        .carousel-indicators [data-bs-target] { background-color: #62b34e; }
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
    <section class="gallery-hero">
        <div class="container gallery-content">
            <h1>Gallery</h1>
            <p>Explore our best moments and builds!</p>
        </div>
    </section>
    <div class="container py-5">
        <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/1.jpg" class="d-block w-100" alt="Gallery Image 1">
                </div>
                <div class="carousel-item">
                    <img src="/images/2.jpg" class="d-block w-100" alt="Gallery Image 2">
                </div>
                <div class="carousel-item">
                    <img src="/images/3.jpg" class="d-block w-100" alt="Gallery Image 3">
                </div>
                <div class="carousel-item">
                    <img src="/images/4.jpg" class="d-block w-100" alt="Gallery Image 4">
                </div>
                <div class="carousel-item">
                    <img src="/images/5.jpg" class="d-block w-100" alt="Gallery Image 5">
                </div>
                <div class="carousel-item">
                    <img src="/images/6.jpg" class="d-block w-100" alt="Gallery Image 6">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="text-center mt-4">
            <a href="/" class="back-link"><i class="bi bi-arrow-left"></i> Back to Home</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 