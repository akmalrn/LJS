@extends('header')
@extends('footer')
@section('navactive4', 'active')
@extends('admin/all/layouthead')

<body>
    <main>
        <section id="Paket Wisata" class="services section">

            <!-- Section Title -->
            <div class="container section-title">
                <span>Layanan 2</span>
                <h2>Layanan 2</h2>
                <p style="color: black">Layanan 2 adalah layanan yang menggabungkan berbagai komponen perjalanan
                    menjadi satu kesatuan yang terorganisir dan mudah dikelola.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    @foreach ($paketWisata as $paket)
                        <div class="col-lg-4 col-md-6" data-aos-delay="100">
                            <div class="service-item  position-relative">
                                <a href="{{ route('showPaketWisata', $paket->id) }}" class="stretched-link">
                                    <div class="">
                                        <img src="{{ asset('storage/' . $paket->path) }}" alt="About Us Image"
                                            class="img-fluid">
                                    </div><br>
                                    <h3>{{ $paket->title }}</h3>
                                    <p style="font-size: large"> Harga : Rp.{{ $paket->price }}.00</p>
                                </a>
                            </div>
                        </div><!-- End Service Item -->
                    @endforeach
                    <!-- End Service Item -->
                </div>

            </div><br>
            <div class="d-flex justify-content-center align-items-center" style="min-height: 50px;"
                data-aos-delay="200">
                <a href="{{ route('dashboardkbc') }}" class="btn btn-primary btn-lg">Kembali Ke Dashboard</a>
            </div>
        </section>
    </main>
</body>
