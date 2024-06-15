<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App BumiHijau</title>
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
        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 1rem;
            border-radius: 5px;
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
        .carousel-item img {
            width: 100%;
            height: auto;
        }

        .card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .card-body {
            flex-grow: 1;
        }

        .card-title {
            margin-bottom: 0.5rem;
        }

        .card-text {
            margin-bottom: 1rem;
        }

        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .carousel-item img {
        height: 500px; /* Set a fixed height for carousel images */
        object-fit: cover; /* Ensure the image covers the whole area without distortion */
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="/">
            <img src="/images/logo.png" alt="BumiHijau Logo">
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/info/trees">Pilihan Pohon</a></li>
                <li class="nav-item"><a class="nav-link" href="/info/locations">Pilihan Lokasi</a></li>
                <?php if (session()->has('user')): ?>
                    <li class="nav-item"><a class="nav-link" href="/donations/create">Buat Donasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <div class="container-fluid p-0">
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
