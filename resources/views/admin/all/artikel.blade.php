@extends('header')
@extends('footer')
@section('navactive6', 'active')
@extends('admin/all/layouthead')

<section id="team" class="team section">

    <!-- Section Title -->
    <div class="container section-title">
        <span>Blog</span>
        <h2>Blog</h2>
        <p>Update Terbaru Lancar Jaya Sejahtera Ada Disini</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row">
            <!-- Cek apakah ada data artikel -->
            @if ($artikel->isNotEmpty())
                <!-- Daftar artikel di halaman utama -->
                @foreach ($artikel as $artikels)
                    <div class="col-lg-4 col-md-6 d-flex" data-aos-delay="100">
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
                <div class="col-12 text-center">
                    <p>Tidak ada artikel terbaru saat ini.</p>
                </div>
            @endif
        </div>
    </div><br>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 50px;" data-aos-delay="200">
        <a href="{{ route('dashboardkbc') }}" class="btn btn-primary btn-lg">Kembali Ke Dashboard</a>
    </div>

</section>
