<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join the Server - PerangOnline SMP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.cdnfonts.com/css/minecraftia" rel="stylesheet">
    <style>
        body {
            background: #23272a;
            color: #e2e2e2;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .server-hero {
            background: url('https://wallpapercave.com/wp/wp2757874.jpg') center/cover no-repeat;
            min-height: 40vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .server-hero::after {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(34, 40, 49, 0.7);
        }
        .server-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: #fff;
        }
        .server-content h1 {
            font-size: 2.5rem;
            font-family: 'Minecraftia', monospace, Arial, sans-serif;
            letter-spacing: 2px;
            text-shadow: 2px 2px 8px #000;
        }
        .server-info-card {
            background: #2c2f33;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.25);
            padding: 2rem 1.5rem;
            margin: 2rem auto;
            max-width: 500px;
        }
        .server-label {
            font-family: 'Minecraftia', monospace, Arial, sans-serif;
            color: #62b34e;
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }
        .server-ip {
            font-size: 1.5rem;
            font-weight: bold;
            background: #181a1b;
            color: #fff;
            border-radius: 8px;
            padding: 0.5rem 1rem;
            display: inline-block;
            margin-bottom: 0.5rem;
            letter-spacing: 1px;
            max-width: 100%;
            overflow-x: auto;
            white-space: nowrap;
        }
        .server-port {
            font-size: 1.2rem;
            font-weight: bold;
            background: #181a1b;
            color: #62b34e;
            border-radius: 8px;
            padding: 0.3rem 0.8rem;
            display: inline-block;
            margin-left: 0.5rem;
        }
        .copy-btn {
            background: #62b34e;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 0.3rem 0.8rem;
            margin-left: 0.5rem;
            font-size: 1rem;
            transition: background 0.2s;
        }
        .copy-btn:hover {
            background: #4e8c3a;
        }
        .server-icon {
            font-size: 2.5rem;
            color: #62b34e;
            margin-bottom: 0.5rem;
        }
        .back-link {
            color: #62b34e;
            text-decoration: none;
            font-size: 1.1rem;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background:#23272a; box-shadow:0 2px 8px rgba(0,0,0,0.12);">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="/images/logo.png" alt="Server Logo" style="height:40px; width:40px; object-fit:cover; border-radius:8px; margin-right:12px; background:#181a1b;" onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';">
                <span style="font-family:'Minecraftia',monospace,Arial,sans-serif; font-size:1.5rem; color:#62b34e; display:none;">PerangOnline SMP</span>
            </a>
        </div>
    </nav>
    <section class="server-hero">
        <div class="container server-content">
            <h1>Join PerangOnline SMP</h1>
            <p>Choose your platform and connect to our Minecraft server!</p>
        </div>
    </section>
    <div class="container">
        <div class="server-info-card mt-4">
            <div class="server-icon"><i class="bi bi-pc-display"></i></div>
            <div class="server-label">Java Edition</div>
            <div class="server-ip" id="java-ip">perangonline.vpsmasterhosting.my:26010</div>
            <button class="copy-btn" onclick="copyToClipboard('java-ip')"><i class="bi bi-clipboard"></i> Copy IP</button>
        </div>
        <div class="server-info-card">
            <div class="server-icon"><i class="bi bi-phone"></i></div>
            <div class="server-label">Bedrock Edition</div>
            <div class="server-ip" id="bedrock-ip">perangonline.vpsmasterhosting.my</div>
            <span class="server-port" id="bedrock-port">26010</span>
            <button class="copy-btn" onclick="copyToClipboard('bedrock-ip', 'bedrock-port')"><i class="bi bi-clipboard"></i> Copy IP & Port</button>
        </div>
        <!-- Registration/Login Tutorial Section -->
        <div class="register-tutorial-card mt-5 mb-4 p-4" style="background:#23272a; border-radius:16px; box-shadow:0 4px 24px rgba(0,0,0,0.18); max-width:600px; margin:auto;">
            <div style="text-align:center;">
                <div style="font-family:'Minecraftia',monospace,Arial,sans-serif; color:#62b34e; font-size:1.5rem; margin-bottom:0.5rem;">
                    <i class="bi bi-person-plus" style="font-size:2rem;"></i> How to Register & Login
                </div>
                <div style="font-size:1.1rem; color:#e2e2e2; margin-bottom:1.2rem;">
                    <span style="color:#ffd700; font-weight:bold;">First time joining?</span> Register your account to protect your builds!
                </div>
                <div class="d-flex flex-column align-items-center gap-3">
                    <div style="background:#181a1b; border-radius:8px; padding:1rem 1.5rem; width:100%; max-width:420px;">
                        <div style="color:#62b34e; font-weight:bold;">Step 1: Register</div>
                        <div style="font-size:1rem; margin:0.5rem 0;">In chat, type:</div>
                        <div style="background:#2c2f33; color:#fff; border-radius:6px; padding:0.5rem 1rem; font-family:monospace; font-size:1.1rem;">
                            /register <span style="color:#ffd700;">anypassword</span> <span style="color:#ffd700;">anypassword</span>
                        </div>
                        <div style="font-size:0.95rem; color:#bdbdbd; margin-top:0.5rem;">(Type your own password twice. Example: <span style="color:#ffd700;">/register mySecret123 mySecret123</span>)</div>
                    </div>
                    <div style="background:#181a1b; border-radius:8px; padding:1rem 1.5rem; width:100%; max-width:420px;">
                        <div style="color:#62b34e; font-weight:bold;">Step 2: Login (Next Time)</div>
                        <div style="font-size:1rem; margin:0.5rem 0;">When you join again, type:</div>
                        <div style="background:#2c2f33; color:#fff; border-radius:6px; padding:0.5rem 1rem; font-family:monospace; font-size:1.1rem;">
                            /login <span style="color:#ffd700;">yourpassword</span>
                        </div>
                        <div style="font-size:0.95rem; color:#bdbdbd; margin-top:0.5rem;">(Use the password you registered with!)</div>
                    </div>
                </div>
                <div style="margin-top:1.5rem; color:#bdbdbd; font-size:0.98rem;">
                    <i class="bi bi-info-circle" style="color:#62b34e;"></i> <b>Tips:</b> Never share your password with anyone. If you forget your password, contact an admin for help.
                </div>
            </div>
        </div>
        <!-- End Registration/Login Tutorial Section -->
        <div class="text-center mt-4">
            <a href="/" class="back-link"><i class="bi bi-arrow-left"></i> Back to Home</a>
        </div>
    </div>
    <script>
        function copyToClipboard(ipId, portId = null) {
            let text = document.getElementById(ipId).textContent;
            if (portId) {
                text += ':' + document.getElementById(portId).textContent;
            }
            navigator.clipboard.writeText(text).then(function() {
                alert('Copied: ' + text);
            }, function(err) {
                alert('Failed to copy!');
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 