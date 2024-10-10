@extends('header')
@extends('footer')
@section('navactive3', 'active')
@extends('admin/all/layouthead')

<body>
    <main>
        <section id="services" class="atraksi-wisata section">
            <div class="container section-title">
                <span class="spa">Layanan 1</span>
                <h2>Layanan 1</h2>
                <p>Layanan 1 adalah tempat atau kegiatan yang menarik perhatian pengunjung dan sering kali menjadi
                    tujuan utama dalam perjalanan atau liburan.</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    @foreach ($atraksiWisata as $atraksi)
                        <div class="col-lg-4 col-md-6" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <a href="{{ route('showatraksi', $atraksi->id) }}" class="stretched-link">
                                    <div class="">
                                        <img src="{{ asset('storage/' . $atraksi->path) }}" alt="Atraksi Wisata Image"
                                            class="img-fluid">
                                    </div>
                                    <h3>{{ $atraksi->title }}</h3>
                                    <p style="font-size: large">Harga: Rp.{{ $atraksi->price }}.00</p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div><br>
            <div class="d-flex justify-content-center align-items-center" style="min-height: 50px;"
                data-aos-delay="200">
                <a href="{{ route('dashboardkbc') }}" class="btn btn-primary btn-lg">Kembali Ke Dashboard</a>
            </div>
        </section>
    </main>
</body>
