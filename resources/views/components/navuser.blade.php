<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clark - Modern Navbar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset-landing-page/home-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset-landing-page/home-assets/css/style.css') }}">
    <style>
        /* Navbar tetap hitam */
        .navbar {
            background-color: #000 !important;
            position: fixed; /* Menjadikan navbar tetap di atas */
            top: 0; /* Menjaga navbar di bagian atas halaman */
            width: 100%; /* Pastikan navbar mengisi lebar halaman */
            z-index: 1000; /* Menempatkan navbar di atas konten lainnya */
        }

        /* Memberikan margin top pada konten agar tidak tertutup oleh navbar */
        body {
            margin-top: 60px; /* Sesuaikan dengan tinggi navbar */
        }

        /* Navbar link active */
        .navbar .nav-item a.active {
            color: #f57c00; /* Warna link navbar yang aktif */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">My Portofolio</a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
                <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Certificate</span></a></li>
                <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
                <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Include Bootstrap JS -->
<script src="{{ asset('asset-landing-page/home-assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('asset-landing-page/home-assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
