<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Builds - PerangOnline SMP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.cdnfonts.com/css/minecraftia" rel="stylesheet">
    <style>
        body { background: #23272a; color: #e2e2e2; font-family: 'Segoe UI', Arial, sans-serif; }
        .build-hero { background: url('https://wallpapercave.com/wp/wp2757874.jpg') center/cover no-repeat; min-height: 30vh; display: flex; align-items: center; justify-content: center; position: relative; }
        .build-hero::after { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(34, 40, 49, 0.7); }
        .build-content { position: relative; z-index: 2; text-align: center; color: #fff; }
        .build-content h1 { font-size: 2.2rem; font-family: 'Minecraftia', monospace, Arial, sans-serif; letter-spacing: 2px; text-shadow: 2px 2px 8px #000; }
        .build-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 2rem; margin-top: 2rem; }
        .build-card { background: #2c2f33; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.18); padding: 1rem; text-align: center; transition: transform 0.2s; }
        .build-card:hover { transform: scale(1.03) rotate(-1deg); }
        .build-img { width: 100%; height: 180px; object-fit: cover; border-radius: 8px; margin-bottom: 1rem; }
        .build-name { font-family: 'Minecraftia', monospace, Arial, sans-serif; color: #ffd700; font-size: 1.2rem; margin-bottom: 0.5rem; }
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
    <section class="build-hero">
        <div class="container build-content">
            <h1>Build Showcase</h1>
            <p>Explore amazing builds from our community!</p>
        </div>
    </section>
    <div class="container py-5">
        <div class="build-grid">
            <div class="build-card">
                <img src="/images/builds/jalur.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/jalur.png', 'Jalur Gemilang')">
                <div class="build-name">Jalur Gemilang</div>
                <div>By: Aifiq,Hantu,Daus,Andrix,Enal,Wishy</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/perang_online.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/perang_online.png', 'PO Signboard')">
                <div class="build-name">PO Signboard</div>
                <div>By: Aifiq,Hantu,Daus,Andrix,Enal,Wishy</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/haz_castle.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/haz_castle.png', 'Istana Spawn')">
                <div class="build-name">Istana Spawn</div>
                <div>By: Haz,Enal</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/tonyus_house.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/tonyus_house.png', 'Rumah Tonyus')">
                <div class="build-name">Rumah Tonyus</div>
                <div>By: Tonyus</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/wishy_house.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/wishy_house.png', 'Rumah Wishy')">
                <div class="build-name">Rumah Wishy</div>
                <div>By: Wishy</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/yoloz_house.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/yoloz_house.png', 'Rumah Yoloz')">
                <div class="build-name">Rumah Andrix</div>
                <div>By: Yoloz</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/milotrain.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/milotrain.png', 'Kereta Api Milo')">
                <div class="build-name">Kereta Api Milo</div>
                <div>By: Aifiq,Hantu,Daus</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/haz_house.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/haz_house.png', 'Rumah Haz')">
                <div class="build-name">Rumah Haz</div>
                <div>By: Haz</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/haz_garden.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/haz_garden.png', 'Taman Haz')">
                <div class="build-name">Taman Haz</div>
                <div>By: Haz</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/hantu_pond.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/hantu_pond.png', 'Kolam Hantu')">
                <div class="build-name">Kolam Hantu</div>
                <div>By: Hantu</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/hantu_house.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/hantu_house.png', 'Rumah Hantu')">
                <div class="build-name">Rumah Hantu</div>
                <div>By: Hantu</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/founder.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/founder.png', 'Founder Farm')">
                <div class="build-name">Founder Farm</div>
                <div>By: Aifiq</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/farm_enal.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/farm_enal.png', 'Kaktus Farm')">
                <div class="build-name">Kaktus Farm</div>
                <div>By:  Enal</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/enal_house.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/enal_house.png', 'Rumah Enal')">
                <div class="build-name">Rumah Enal</div>
                <div>By:  Enal</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/enal_jambatan.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/enal_jambatan.png', 'Jambatan Enal')">
                <div class="build-name">Jambatan Enal</div>
                <div>By:  Enal</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/daus_village.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/daus_village.png', 'Kampung Daus')">
                <div class="build-name">Kampung Daus</div>
                <div>By:  Daus</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/daus_old_village.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/daus_old_village.png', 'Kampung Daus Lama')">
                <div class="build-name">Kampung Daus Lama</div>
                <div>By:  Daus</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/daus_house.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/enal_house.png', 'Rumah Enal')">
                <div class="build-name">Rumah Daus</div>
                <div>By:  Daus</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/chicken_jokey.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/chicken_jokey.png', 'Chicken Jokey')">
                <div class="build-name">Chicken Jokey</div>
                <div>By:  Haz</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/breaking_bad.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/breaking_bad.png', 'Kilang Eh')">
                <div class="build-name">Kilang Eh</div>
                <div>By:  Enal</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/aufa_house.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/aufa_house.png', 'Rumah Aufa')">
                <div class="build-name">Rumah Aufa</div>
                <div>By:  Aufa</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/aufa_farm.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/enal_house.png', 'Rumah Enal')">
                <div class="build-name">Aufa Farm</div>
                <div>By:  Aufa</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/aifiq_house.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/aifiq_house.png', 'Rumah Aifiq')">
                <div class="build-name">Rumah Aifiq</div>
                <div>By:  Aifiq</div>
            </div>
            <div class="build-card">
                <img src="/images/builds/aifiq_mansion.png" alt="Build 1" class="build-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('/images/builds/aifiq_mansion.png', 'Mansion Aifiq')">
                <div class="build-name">Mansion Aifiq</div>
                <div>By:  Aifiq</div>
            </div>
        </div>
        <!-- Modal for full-size image -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content" style="background:#23272a; border-radius:16px;">
                    <div class="modal-header" style="border-bottom:1px solid #2c2f33;">
                        <h5 class="modal-title" id="imageModalLabel" style="color:#ffd700;"></h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img id="modalImage" src="" alt="Full Size Build" style="max-width:100%; max-height:70vh; border-radius:12px; box-shadow:0 2px 12px rgba(0,0,0,0.25);">
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="/" class="back-link"><i class="bi bi-arrow-left"></i> Back to Home</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showImageModal(imgSrc, title) {
            document.getElementById('modalImage').src = imgSrc;
            document.getElementById('imageModalLabel').textContent = title;
        }
    </script>
</body>
</html> 