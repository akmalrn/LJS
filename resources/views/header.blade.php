
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
          <a href="{{ $konfigurasi->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="{{ $konfigurasi->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="#" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{ asset('storage/logos/' . $konfigurasi->logo) }}">
          <h3 class="sitename">{{ $konfigurasi->judul_logo }}</h3>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ route('dashboardkbc') }}" class="@yield('navactive1')">Beranda</a></li>
            <li><a href="{{ route('AllAtraksiWisata') }}" class="@yield('navactive3')">Layanan</a></li>
            <li><a href="{{ route('allGaleri') }}" class="@yield('navactive5')">Pengalaman Kami</a></li>
            <li><a href="{{ route('allArtikel') }}" class="@yield('navactive6')">Blog</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>

    </div>

  </header>

