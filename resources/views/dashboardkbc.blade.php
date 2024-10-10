<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>
        @if ($konfigurasi->title)
            {{ $konfigurasi->title }}
        @else
            <h1>Judul tidak tersedia</h1>
        @endif
    </title>
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

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Day
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="index-page">
    ,..0
    <header id="header" class="header fixed-top">

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <a href="{{ $konfigurasi->link_email }}" class="contact-item" target="_blank">
                        <i class="bi bi-envelope"></i>
                        <span>{{ $konfigurasi->email }}</span>
                    </a>
                    <a href="https://wa.me/{{ $konfigurasi->telepon }}" class="contact-item ms-4" target="_blank">
                        <i class="bi bi-phone"></i>
                        <span>{{ $konfigurasi->telepon }}</span>
                    </a>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="{{ $konfigurasi->facebook }}" class="facebook"><i
                            class="bi bi-facebook"></i></a>
                    <a href="{{ $konfigurasi->instagram }}" class="instagram"><i
                            class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-center">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="#" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="{{ asset('storage/logos/' . $konfigurasi->logo) }}" width="140px">
                    <h3 class="sitename" style="margin: 0px 0px 0px -10%">{{ $konfigurasi->judul_logo }}</h3>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero">Beranda</a></li>
                        <li><a href="#about">Tentang Kami</a></li>
                        <li><a href="#services">Layanan</a></li>
                        <li><a href="#portfolio">Pengalaman Kami</a></li>
                        <li><a href="#team">Blog</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>

        </div>

    </header>



    <main class="main">

        <a href="https://wa.me/{{ $konfigurasi->telepon }}" target="_blank" class="whatsapp-float">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="50" height="50">
        </a>


        <!-- Hero Section -->
        <section id="hero" class="hero section black-background">
            <div class="content_sliderrrr" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-start">
                    <div class="col-lg-8 sliderrrr">
                        @foreach ($sliders as $slider)
                            <div class="slide">
                                <img src="{{ asset('storage/' . $slider->path) }}" alt="Slider Image">
                                <div class="slider-content">
                                    <div class="container" data-aos="fade-up" data-aos-delay="100">
                                        <div class="row justify-content-start">
                                            <div class="col-lg-8">
                                                <p>{{ $slider->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ $slider->link }}"
                                        class="btn-get-started">{{ $slider->button_text }}</a>
                                </div>
                            </div>
                        @endforeach
                        <div id="nextSlide" class="swiper-button-next"></div>
                        <div id="prevSlide" class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <!-- Memuat script jQuery -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script src="{{ asset('assets/jss/script.js') }}"></script>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Tentang Kami<br></span>
                <h2>Tentang Kami<br></h2>
                <p>-</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    @foreach ($aboutUs as $aboutUsItem)
                        <!-- Pastikan data dikirimkan dari controller -->
                        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('storage/' . $aboutUsItem->path) }}" class="img-fluid"
                                alt="Image" style="border-radius: 10%;">
                        </div>

                        <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                            <h3>{{ $konfigurasi->judul_logo }}</h3>
                            <p class="fst-italic">
                                {{ $aboutUsItem->short_description }}
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> <span> @foreach ($benefit as $item)
                                    @if ($item->urutan == 1)
                                       {{ $item->title }}
                                    @endif
                                @endforeach</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>@foreach ($benefit as $item)
                                    @if ($item->urutan == 2)
                                       {{ $item->title }}
                                    @endif
                                @endforeach</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>@foreach ($benefit as $item)
                                    @if ($item->urutan == 3)
                                       {{ $item->title }}
                                    @endif
                                @endforeach</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>@foreach ($benefit as $item)
                                    @if ($item->urutan == 4)
                                       {{ $item->title }}
                                    @endif
                                @endforeach</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>@foreach ($benefit as $item)
                                    @if ($item->urutan == 5)
                                       {{ $item->title }}
                                    @endif
                                @endforeach</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>@foreach ($benefit as $item)
                                    @if ($item->urutan == 6)
                                       {{ $item->title }}
                                    @endif
                                @endforeach</span></li>
                            </ul>
                            <a href="https://wa.me/+{{ $konfigurasi->telepon }}" target="blank" class="read-more">
                                <span>Hubungi Kami</span><i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    @endforeach


                </div>

            </div>

        </section><!-- /About Section -->

        <section id="cards" class="cards section light-background">

            <div class="container">

                <div class="row no-gutters">

                    <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="100">
                        @foreach ($benefit as $item)
                            @if ($item->urutan == 1)
                                <span style="text-align: center;"> <img src="{{ asset('storage/' . $item->path) }}" alt="Image" width="20%"></span>
                                <h4>{{ $item->title }}</h4>
                                <p>{{ $item->description }}</p>
                            @endif
                        @endforeach
                    </div>

                    <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($benefit as $item)
                            @if ($item->urutan == 2)
                            <span style="text-align: center;"> <img src="{{ asset('storage/' . $item->path) }}" alt="Image" width="20%"></span>
                                <h4>{{ $item->title }}</h4>
                                <p>{{ $item->description }}</p>
                            @endif
                        @endforeach
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="300">
                        @foreach ($benefit as $item)
                            @if ($item->urutan == 3)
                                 <span style="text-align: center;"> <img src="{{ asset('storage/' . $item->path) }}" alt="Image" width="20%"></span>
                                <h4>{{ $item->title }}</h4>
                                <p>{{ $item->description }}</p>
                            @endif
                        @endforeach
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="400">
                        @foreach ($benefit as $item)
                            @if ($item->urutan == 4)
                                 <span style="text-align: center;"> <img src="{{ asset('storage/' . $item->path) }}" alt="Image" width="20%"></span>
                                <h4>{{ $item->title }}</h4>
                                <p>{{ $item->description }}</p>
                            @endif
                        @endforeach
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="500">
                        @foreach ($benefit as $item)
                            @if ($item->urutan == 5)
                                 <span style="text-align: center;"> <img src="{{ asset('storage/' . $item->path) }}" alt="Image" width="20%"></span>
                                <h4>{{ $item->title }}</h4>
                                <p>{{ $item->description }}</p>
                            @endif
                        @endforeach
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="600">
                        @foreach ($benefit as $item)
                            @if ($item->urutan == 6)
                                 <span style="text-align: center;"> <img src="{{ asset('storage/' . $item->path) }}" alt="Image" width="20%"></span>
                                <h4>{{ $item->title }}</h4>
                                <p>{{ $item->description }}</p>
                            @endif
                        @endforeach
                    </div><!-- End Card Item -->

                </div>

            </div>

        </section>



        <!-- Cards Section -->
        <section id="services" class="atraksi-wisata section">
            <div class="container section-title" data-aos="fade-up">
                <span class="spa">Layanan</span>
                <h2>Layanan</h2>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    @foreach ($atraksiWisata as $atraksi)
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <a href="https://wa.me/+{{ $konfigurasi->telepon }}" target="blank" class="stretched-link">
                                    <div class="">
                                        <img src="{{ asset('storage/' . $atraksi->path) }}"
                                            alt="Atraksi Wisata Image" class="img-fluid">
                                    </div>
                                    <h3>{{ $atraksi->title }}</h3>
                                    <p>{{ $atraksi->description }}</p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div><br>
            <div class="d-flex justify-content-center align-items-center" style="min-height: 50px;"
                data-aos="fade-up" data-aos-delay="200">
            </div>
        </section>
        <!-- /Services Section -->
        <hr>
        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">

            <img src="gambar/LJS.jpg" alt="" style=" filter: brightness(0.3);">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            @foreach ($whyus as $whyus)
                                <h2>{{ $whyus->title }}
                                </h2><br>
                                <p style="font-size:large;">
                                <div class="ck-content">
                                    {!! $whyus->description !!}
                                </div>

                                </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Pengalaman Kami</span>
                <h2>Pengalaman Kami</h2>
                <p>Dengan pengalaman bertahun-tahun dalam industri ini, kami telah menghadirkan solusi inovatif dan layanan yang berkualitas tinggi bagi klien dari berbagai sektor.</p>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($Galery as $galery)
                            <div class="col-lg-3 col-md-6 col-sm-12 d-flex portfolio-item isotope-item filter-app">
                                <a href="{{ asset('storage/' . $galery->path) }}"
                                    data-gallery="portfolio-gallery-app" data-id="{{ $galery->id }}"
                                    class="glightbox preview-link">
                                    <img src="{{ asset('storage/' . $galery->path) }}" alt="Glaery Us Image"
                                        class="img-fluid"></a>
                                <div class="portfolio-info">
                                    <i class="bi bi-zoom-in">Klik</i>
                                    <a href="#" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div><br>
                <div class="d-flex justify-content-center align-items-center" style="min-height: 50px;"
                    data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('allGaleri') }}" class="btn btn-primary btn-lg">Selengkapnya</a>
                </div>
            </div>
        </section>

        <section id="clients" class="clients section">

            <div class="container">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000,
                                "disableOnInteraction": false
                            },
                            "slidesPerView": 10,
                            "spaceBetween": 20,
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            },
                            "navigation": {
                                "nextEl": ".swiper-button-next",
                                "prevEl": ".swiper-button-prev"
                            },
                            "breakpoints": {
                                "320": {
                                    "slidesPerView": 2,
                                    "spaceBetween": 40
                                },
                                "480": {
                                    "slidesPerView": 3,
                                    "spaceBetween": 60
                                },
                                "640": {
                                    "slidesPerView": 4,
                                    "spaceBetween": 80
                                },
                                "992": {
                                    "slidesPerView": 10,
                                    "spaceBetween": 20
                                }
                            }
                        }
                    </script>
                    <div class="swiper-wrapper align-items-center">
                        @foreach ($mitra as $item)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $item->path) }}"  class="img-fluid custom-img" alt="Mitra Image" style="max-width: 150%">
                            </div>
                        @endforeach
                    </div>
                    <br>
            </div>

        </section><!-- /Clients Section -->

        <!-- Team Section -->
        <section id="team" class="team section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Blog</span>
                <h2>Blog</h2>
                <p>Update Terbaru {{ $konfigurasi->judul_logo }} Ada Disini</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row">
                    <!-- Cek apakah ada data artikel -->
                    @if ($artikel->isNotEmpty())
                        <!-- Daftar artikel di halaman utama -->
                        @foreach ($artikel as $artikels)
                            <div class="col-lg-3 col-sm-12 d-flex" data-aos="fade-up" data-aos-delay="100">
                                <div class="member">
                                    <a href="{{ route('showArtikel', $artikels->id) }}" class="article-link">
                                        <img src="{{ asset('storage/' . $artikels->path) }}" class="img-fluid"
                                            alt="{{ $artikels->title }}">
                                        <div class="member-content">
                                            <h4>{{ $artikels->title }}</h4>
                                            <span>{{ $artikels->kategoriartikel->nama_kategori }}</span>
                                            <p>{{ $artikels->short_description }}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <!-- Jika tidak ada artikel, tampilkan pesan -->
                        <div class="col-12 text-center" data-aos="fade-up">
                            <p>Tidak ada Blog terbaru saat ini.</p>
                        </div>
                    @endif
                </div>
            </div><br>
            <div class="d-flex justify-content-center align-items-center" style="min-height: 50px;"
                data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('allArtikel') }}" class="btn btn-primary btn-lg">Selengkapnya</a>
            </div>

        </section>
        <!-- /Team Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Kontak</span>
                <h2>Kontak</h2>
                <p>Hubungi Kami Agar Kami Bisa Memberikan Bantuan</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Alamat</h3>
                            <p>{{ $konfigurasi->alamat }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <a href="https://wa.me/{{ $konfigurasi->telepon }}"
                            class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="300" target="_blank">
                            <i class="bi bi-telephone"></i>
                            <h3>Nomor Telepon</h3>
                            <p>{{ $konfigurasi->telepon }}</p>
                        </a>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <a href="{{ $konfigurasi->link_email }}"
                            class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="400" target="_blank">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p>{{ $konfigurasi->email }}</p>
                        </a>
                    </div><!-- End Info Item -->

                </div>

                <div class="row gy-4 mt-1">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <iframe src="{{ $konfigurasi->map }}" frameborder="0" style="border:0;" width="100%"
                            height="400px" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div><!-- End Google Maps -->

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="400">
                            <h1>Hubungi Kami</h1>
                            <p>Kami selalu siap membantu Anda! Apakah Anda memiliki pertanyaan, membutuhkan informasi lebih lanjut, atau ingin berdiskusi mengenai proyek atau layanan kami? Jangan ragu untuk menghubungi kami melalui berbagai saluran komunikasi yang tersedia. Tim kami akan dengan senang hati merespon setiap pertanyaan Anda dengan cepat dan profesional. Kami percaya bahwa komunikasi yang baik adalah kunci untuk memberikan layanan terbaik kepada pelanggan kami. Hubungi kami hari ini, dan mari kita mulai percakapan untuk membawa ide-ide Anda menjadi kenyataan.
                            </p>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer position-relative dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-about">
                        <a href="index.html" class="logo sitename">LJS</a>
                        <div class="footer-contact pt-3">
                            <p>{{ $konfigurasi->alamat }}</p>
                            <p class="mt-3">
                                <strong>Phone:</strong>
                                <a href="https://wa.me/{{ $konfigurasi->telepon }}" class="contact-link"
                                    target="_blank">{{ $konfigurasi->telepon }}</a>
                            </p>
                            <p>
                                <strong>Email:</strong>
                                <a href="{{ $konfigurasi->link_email }}" class="contact-link"
                                    target="_blank">{{ $konfigurasi->email }}</a>
                            </p>
                        </div>
                        <div class="social-links d-flex mt-4">
                            <a href="{{ $konfigurasi->facebook }}"><i class="bi bi-facebook"></i></a>
                            <a href="{{ $konfigurasi->instagram }}"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Link</h4>
                    <ul>
                        <li><a href="#hero">Beranda</a></li>
                        <li><a href="#about">Tentang Kami</a></li>
                        <li><a href="#services">Layanan</a></li>
                        <li><a href="#portfolio">Pengalaman Kami</a></li>
                        <li><a href="#team">Blog</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Selengkapnya</h4>
                    <ul>
                        <li><a href="{{ route('AllAtraksiWisata') }}">Selengkapnya Layanan</a></li>
                        <li><a href="{{ route('allGaleri') }}">Selengkapnya Pengalaman Kami</a></li>
                        <li><a href="{{ route('allArtikel') }}">Selengkapnya Blog</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Buletin Kami</h4>
                    <p>Ikuti Kami Di Berbagai Sosial Media, <b><a href="{{ $konfigurasi->instagram }}"
                                >Instagram</a></b> Maupun <b><a href="{{ $konfigurasi->facebook }}"
                                >Facebook</a></b>, Kamu
                        Bisa Hubungi Kami Di <b><a href="{{ $konfigurasi->link_email }}"
                                target="_blank">Email</a></b> Kami
                        Atau Nomor <b><a href="https://wa.me/{{ $konfigurasi->telepon }}"
                                target="_blank">Telepon</a></b> Kami</p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <div class="credits">
                {{ $konfigurasi->footer_name }}
            </div>
        </div>

    </footer>


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
