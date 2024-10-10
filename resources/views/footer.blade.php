<footer id="footer" class="footer position-relative dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6">
          <div class="footer-about">
            <a href="{{ route('ReadMore') }}" class="logo sitename">LJS</a>
            <div class="footer-contact pt-3">
              <p>Alamat : {{ $konfigurasi->email }}</p>
              <p class="mt-3">
                <strong>Phone:</strong>
                <a href="https://wa.me/{{ $konfigurasi->telepon }}" class="contact-link" target="_blank">{{ $konfigurasi->telepon }}</a>
            </p>
            <p>
                <strong>Email:</strong>
                <a href="{{ $konfigurasi->link_email }}" class="contact-link" target="_blank">{{ $konfigurasi->email }}</a>
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
            <li><a href="{{ route('dashboardkbc') }}#hero">Slider</a></li>
            <li><a href="{{ route('dashboardkbc') }}#services">Layanan</a></li>
            <li><a href="{{ route('dashboardkbc') }}#portfolio">Pengalaman Kami</a></li>
            <li><a href="{{ route('dashboardkbc') }}#team">Blog</a></li>
            <li><a href="{{ route('dashboardkbc') }}#contact">Kontak</a></li>
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
          <p>Ikuti Kami Di Berbagai Sosial Media, <b><a href="{{ $konfigurasi->instagram }}">Instagram</a></b> Maupun <b><a href="{{ $konfigurasi->link_email }}">Email</a></b> Kami Atau Nomor <b><a href="https://wa.me/{{ $konfigurasi->telepon }}">Telepon</a></b> Kami</p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
        {{ $konfigurasi->footer_name }}
    </div>

  </footer>
