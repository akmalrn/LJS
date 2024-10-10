@extends('header')
@extends('footer')
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Kampung Batik Cibuluh</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('storage/title_images/' . $konfigurasi->title_img) }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glight/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('stylee/buatshow.css') }}">
</head>
<main class="main">
    <!-- Konten HTML -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <a href="{{ url()->previous() }}" class="btn-back">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                        <h2>{{ $paketwisata->title }}</h2>
                    <div class="card-body">
                        <!-- Gambar paketwisata -->
                        <img src="{{ asset('storage/' . $paketwisata->path) }}" class="img-fluid"
                            alt="{{ $paketwisata->title }}">

                        <!-- Harga paketwisata -->
                        <p class="harga"><strong>Harga:</strong> Rp.{{ $paketwisata->price }}.00</p>

                        <!-- Deskripsi paketwisata -->
                        <p>{{ $paketwisata->description }}</p>
                        <p>{{ $paketwisata->long_description }}</p>

                        <!-- Tombol Kembali ke Dashboard -->
                        <a href="{{ route('dashboardkbc') }}" class="btn btn-primary">Kembali ke Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
