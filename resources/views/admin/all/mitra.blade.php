@extends('header')
@extends('footer')
@extends('admin/all/layouthead')

<main>
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title">
            <span>Mitra</span>
            <h2>Mitra</h2>
            <p>Mitra adalah istilah yang merujuk pada kumpulan Client</p>
        </div><!-- End Section Title -->
        <div class="portfolio-container">
            @foreach ($mitra as $item)
                <div class="portfolio-item">
                    <a href="{{ asset('storage/' . $item->path) }}" data-gallery="portfolio-gallery-app"
                        class="glightbox preview-link">
                        <img src="{{ asset('storage/' . $item->path) }}" alt="mitra Image" class="img-fluid">
                    </a>
                    <div class="portfolio-info">
                        <i class="bi bi-zoom-in">Klik</i>
                        <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
        <br>
        <div class="d-flex justify-content-center align-items-center" style="min-height: 50px;" data-aos-delay="200">
            <a href="{{ route('dashboardkbc') }}" class="btn btn-primary btn-lg">Kembali Ke Dashboard</a>
        </div>
        </div>
    </section>
</main>
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>


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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const lightbox = GLightbox({
            selector: '.glightbox', // Selector untuk elemen yang ingin Anda gunakan dengan Glightbox
            closeButton: true, // Menampilkan tombol close
            loop: true, // Mengaktifkan slide looping
            slideEffect: 'slide', // Efek slide ketika bergeser antar gambar
            touchNavigation: true, // Mengaktifkan navigasi sentuh pada perangkat mobile
        });
    });
</script>
