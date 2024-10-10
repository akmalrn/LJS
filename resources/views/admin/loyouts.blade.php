<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Backend - Lancar Jaya Sejahtera</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('gambar/logograha.png') }}" rel="icon">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="sb-nav-fixed">

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion"
                style="background :linear-gradient(135deg, #3498db, #8e44ad)">
                <img src="{{ asset('assets/img/Logo_Graha_Tekno-removebg-preview.png') }}" alt="" width="50%"
                    style="margin: -20% 100px 0 50px"><a class="navbar-brand ps-3" href="index.html"></a></img>
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">NavBar</div>
                        <a class="nav-link" href="{{ route('admindashboard') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">View</div>
                        <div class="sb-nav-link-icon"></div>
                        <div class="sb-nav-link-icon"><a class="nav-link" href="{{ route('konfigurasi') }}">Konfigurasi</a></div>
                        <div class="sb-nav-link-icon"><a class="nav-link" href="{{ route('viewslider') }}">Slider</a></div>
                        <div class="sb-nav-link-icon"><a class="nav-link" href="{{ route('viewaboutus') }}">About Us</a></div>
                        <div class="sb-nav-link-icon"><a class="nav-link" href="{{ route('atraksiwisata') }}">Layanan</a></div>
                        <div class="sb-nav-link-icon"><a class="nav-link" href="{{ route('WhyUs') }}">Why Us</a></div>
                        <div class="sb-nav-link-icon"><a class="nav-link" href="{{ route('Galery') }}">Portofolio</a></div>
                        <div class="sb-sidenav-collapse-arrow"><a class="nav-link"href="{{ route('artikels') }}">Blog</a></div>
                        <div class="sb-sidenav-collapse-arrow"><a class="nav-link"href="{{ route('benefit') }}">Benefit</a></div>
                        <div class="sb-sidenav-collapse-arrow"><a class="nav-link"href="{{ route('mitra') }}">Mitra</a></div>
                        <div class="sb-sidenav-collapse-arrow">
                            <form action="{{ route('LogoutUser') }}" method="POST">
                                @csrf
                                <button type="submit" onclick="return confirmLogout()"
                                    style="color: rgb(0, 0, 0); background-color: rgb(255, 255, 255); border: none; padding: 10px 20px; cursor: pointer;">
                                    Logout
                                </button>
                            </form>
                        </div>
                        </a>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main style="margin: -8% 0px 0px 0px ">
                <div class="container-fluid px-4">
                    <h1 class="mt-4"
                        style="font-size: 32px; color: #4b0082; /* Warna ungu gelap */ margin-bottom: 20px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; background: -webkit-linear-gradient(#6f42c1, #007bff); /* Gradien ungu ke biru */ -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                        @yield('title')</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">@yield('title2')</li>
                    </ol>
                    @yield('Konten')
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Graha Teknologi 2024</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>
</body>

</html>
