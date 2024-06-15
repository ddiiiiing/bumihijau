<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Bumihijau</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Raleway', sans-serif;
            background-color: #e8f5e9;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar {
            background-color: #388e3c;
        }
        .navbar a {
            color: white;
        }
        .btn-green {
            background-color: #66bb6a;
            color: white;
        }
        .btn-green:hover {
            background-color: #558b2f;
        }
        .container {
            flex: 1;
        }
        .footer {
            background-color: #388e3c;
            color: white;
            text-align: center;
            padding: 1rem 0;
        }
        .navbar-brand img {
            height: 40px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="/admin/dashboard">
            <img src="/images/logo.png" alt="BumiHijau Logo">
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/admin/dashboard">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/trees">List Pohon</a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/locations">List Lokasi</a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/donations">Donasi</a></li>
                <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <?= $this->renderSection('content') ?>
    </div>
    <footer class="footer mt-5 py-3">
        <p>&copy; 2024 BumiHijau. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
