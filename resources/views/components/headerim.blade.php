<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('asset-landing-page/css/styles2.css') }}" rel="stylesheet" />
    </head>
    <style>
/* Custom Header */
.custom-header {
    background: #ffffff; /* Latar belakang putih cerah */
    position: relative;
    overflow: hidden;
    padding: 3rem 0; /* Tambahkan padding atas dan bawah */
    border-bottom: 2px solid #4caf50; /* Garis bawah hijau segar */
}

.custom-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(76, 175, 80, 0.2), rgba(76, 175, 80, 0.1)); /* Overlay hijau transparan */
    z-index: 1;
}

.custom-header .text-content {
    position: relative;
    z-index: 2;
    text-align: center;
}

.custom-header h1 {
    font-size: 3rem;
    font-weight: bold;
    color: #4caf50; /* Hijau segar */
    line-height: 1.2;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2); /* Sedikit bayangan */
}

.custom-header p {
    font-size: 1.25rem;
    color: #6c757d; /* Abu-abu gelap */
    line-height: 1.6;
}

.custom-header .btn-primary {
    padding: 0.75rem 1.5rem;
    font-size: 1.125rem;
    background: #4caf50; /* Hijau segar */
    border: none;
    transition: all 0.3s ease;
    border-radius: 5px;
}

.custom-header .btn-primary:hover {
    background: #388e3c; /* Hijau lebih gelap */
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(76, 175, 80, 0.3); /* Bayangan hijau */
}

.custom-header img {
    border: 5px solid rgba(76, 175, 80, 0.2); /* Border hijau transparan */
    border-radius: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative; /* Tetap berada di atas overlay */
    z-index: 3; /* Pastikan gambar berada di atas overlay */
}

.custom-header img:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Bayangan lembut */
}

/* Tambahan untuk membuat header lebih responsif */
@media (max-width: 768px) {
    .custom-header h1 {
        font-size: 2.5rem;
    }

    .custom-header p {
        font-size: 1.1rem;
    }

    .custom-header img {
        margin-top: 1rem;
    }
}


    </style>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">

            <!-- Header-->
            <header class="custom-header bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6 text-content">
                            @foreach ($home as $row)
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-3">{{ $row->name }}</h1>
                                <p class="lead fw-normal text-white-50 mb-4">{{ $row->description }}</p>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                            <img class="img-fluid rounded-3 my-5 shadow-lg" src="{{ asset('storage/' . $row->file) }}" alt="{{ $row->name }}" />
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Blog preview section-->
        </main>