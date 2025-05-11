<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - PerangOnline SMP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.cdnfonts.com/css/minecraftia" rel="stylesheet">
    <style>
        body {
            background: url('https://wallpapercave.com/wp/wp2757874.jpg') center/cover no-repeat fixed;
            min-height: 100vh;
            color: #e2e2e2;
        }
        .admin-header {
            background: #23272a;
            box-shadow: 0 2px 8px rgba(0,0,0,0.12);
            padding: 0.75rem 0;
        }
        .admin-header .navbar-brand {
            display: flex;
            align-items: center;
        }
        .admin-header img {
            height: 40px;
            width: 40px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 12px;
            background: #181a1b;
        }
        .admin-header span {
            font-family: 'Minecraftia', monospace, Arial, sans-serif;
            font-size: 1.5rem;
            color: #62b34e;
        }
        .login-section {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: rgba(44,47,51,0.97);
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.18);
            padding: 2.5rem 2rem 2rem 2rem;
            max-width: 400px;
            width: 100%;
        }
        .login-card h2 {
            font-family: 'Minecraftia', monospace, Arial, sans-serif;
            color: #62b34e;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .form-label {
            font-weight: 500;
            color: #e2e2e2;
        }
        .form-control {
            background: #23272a;
            color: #e2e2e2;
            border: 1px solid #444;
        }
        .form-control:focus {
            background: #23272a;
            color: #fff;
            border-color: #62b34e;
            box-shadow: 0 0 0 0.2rem rgba(98,179,78,0.15);
        }
        .btn-mc {
            background: #62b34e;
            color: #fff;
            font-weight: 700;
            border-radius: 8px;
            font-size: 1.1rem;
            padding: 0.6rem 2rem;
            border: none;
            box-shadow: 0 4px 16px rgba(0,0,0,0.12);
            transition: background 0.2s;
        }
        .btn-mc:hover {
            background: #4e8c3a;
            color: #fff;
        }
        .back-link {
            color: #bdbdbd;
            text-decoration: none;
            font-size: 0.95rem;
        }
        .back-link:hover {
            color: #62b34e;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar admin-header">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/images/logo.png" alt="Server Logo" onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';">
                <span style="display:none;">PerangOnline SMP</span>
            </a>
        </div>
    </nav>

    <!-- Login Section -->
    <div class="login-section">
        <div class="login-card">
            <h2>Admin Login</h2>
            <form method="POST" action="/admin/login">
                @csrf
                @if($errors->any())
                    <div class="alert alert-danger py-2">
                        {{ $errors->first() }}
                    </div>
                @endif
                <div class="mb-3">
                    <label for="admin-username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="admin-username" name="name" placeholder="Enter admin username" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="admin-password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="admin-password" name="password" placeholder="Enter password">
                </div>
                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-mc">Login</button>
                </div>
            </form>
            <div class="text-center mt-3">
                <a href="/" class="back-link"><i class="bi bi-arrow-left"></i> Back to Home</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 