@extends('admin.loyouts')
@section('Konten')
    <style>
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        h2 {
            text-align: center;
            font-size: 36px;
            color: #4b0082;
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: bold;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .card img {
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .card:hover img {
            transform: scale(1.1);
        }

        .card-content {
            text-align: center;
        }

        .card-title {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
        }

        .card-count {
            font-size: 24px;
            color: #4b0082;
            font-weight: bold;
            margin-top: 5px;
        }
    </style>
    <hr>
    <div class="container">
        <h2>Total Data</h2>
        <div class="card-container">
            <a href="{{ route('artikels') }}" class="card">
                <img src="{{ asset('gambar/artikel-removebg-preview.png') }}" width="120" alt="Artikels">
                <div class="card-content">
                    <h3 class="card-title">Total Blog</h3>
                    <p class="card-count">{{ $totalArtikels }}</p>
                </div>
            </a>
            <a href="{{ route('viewaboutus') }}" class="card">
                <img src="{{ asset('gambar/about_us-removebg-preview.png') }}" width="80" alt="About Us">
                <div class="card-content">
                    <h3 class="card-title">About Us</h3>
                    <p class="card-count">{{ $totalAboutUs }}</p>
                </div>
            </a>
            <a href="{{ route('Galery') }}" class="card">
                <img src="{{ asset('gambar/galeri-removebg-preview.png') }}" width="80" alt="Galery">
                <div class="card-content">
                    <h3 class="card-title">Total Portofolio</h3>
                    <p class="card-count">{{ $totalGalery }}</p>
                </div>
            </a>
            <a href="{{ route('atraksiwisata') }}" class="card">
                <img src="{{ asset('gambar/atraksi-removebg-preview.png') }}" width="80" alt="Atraksi Wisata">
                <div class="card-content">
                    <h3 class="card-title">Total Layanan</h3>
                    <p class="card-count">{{ $totalAtraksiWisata }}</p>
                </div>
            </a>
            <a href="{{ route('viewslider') }}" class="card">
                <img src="{{ asset('gambar/slider-removebg-preview.png') }}" width="80" alt="Slider">
                <div class="card-content">
                    <h3 class="card-title">Slider</h3>
                    <p class="card-count">{{ $totalSlider }}</p>
                </div>
            </a>
            <a href="{{ route('viewslider') }}" class="card">
                <img src="{{ asset('gambar/Why_Us-removebg-preview.png') }}" width="80" alt="Slider">
                <div class="card-content">
                    <h3 class="card-title">Why Us</h3>
                    <p class="card-count">{{ $totalWhyUs }}</p>
                </div>
            </a>
            <a href="{{ route('mitra') }}" class="card">
                <img src="{{ asset('gambar/mitra-removebg-preview.png') }}" width="80" alt="Paket Wisata">
                <div class="card-content">
                    <h3 class="card-title">Total Mitra</h3>
                    <p class="card-count">{{ $totalMitra }}</p>
                </div>
            </a>
            <a href="{{ route('benefit') }}" class="card">
                <img src="{{ asset('gambar/benefit-removebg-preview.png') }}" width="80" alt="Paket Wisata">
                <div class="card-content">
                    <h3 class="card-title">Total Benefit</h3>
                    <p class="card-count">{{ $totalBenefit }}</p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <h2>Total Kunjungan ke Website  </h2>

        <canvas id="visitorsChart" width="400" height="200"></canvas>

        <script>
            const ctx = document.getElementById('visitorsChart').getContext('2d');
            const visitorsChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Harian', 'Mingguan', 'Bulanan', 'Total Keseluruhan'],
                    datasets: [{
                        label: 'Kunjungan',
                        data: [{{ $dailyVisits }}, {{ $weeklyVisits }}, {{ $monthlyVisits }}, {{ $totalVisits }}],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </div>

@endsection
