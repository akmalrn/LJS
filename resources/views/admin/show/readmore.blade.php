@extends('header')
@extends('footer')
@section('navactive2', 'active')

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
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <style>
        /* public/css/dashboard.css */
        .about-us {
            padding: 50px 20px;
            background-color: #f9f9f9;
            text-align: center;
        }

        .about-us h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #333;
        }

        .about-content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            text-align: left;
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-content img {
            max-width: 50%;
            height: auto;
            border-radius: 10px;
        }

        .about-description {
            max-width: 50%;
        }

        .about-description p {
            font-size: 18px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .about-us .btn-link {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .about-us .btn-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<main>
    <section class="about-us">
        <h1>-</h1>
        @if ($about && $about->path)
            <div class="about-content">
                <img src="{{ asset('storage/' . $about->path) }}" alt="About Us Image" class="img-fluid">
                <div class="about-description">
                    <h2>{{ $konfigurasi->judul_logo }}</h2>
                    <div class="ck-content">
                        {!! $about->description !!}
                    </div>
                    <a href="{{ route('dashboardkbc') }}" class="btn-link">Kembali Ke Dashboard</a>
                </div>
            </div>
        @endif
    </section>

</main>
