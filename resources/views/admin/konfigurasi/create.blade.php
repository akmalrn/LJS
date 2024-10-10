@extends('admin.loyouts')
@section('Konten')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>{{ $konfigurasi->id ? 'Update' : 'Create' }} Konfigurasi</title>
    <style>.form-group {
        width: 48%; /* Atur lebar setiap kolom */
        box-sizing: border-box;
    }

    .form-row {
        display: flex;
        justify-content: space-between; /* Mengatur jarak antara dua kolom */
        flex-wrap: wrap;
    }

    .form-row .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-size: 16px;
        margin-bottom: 5px;
        display: block;
    }

    @media (max-width: 768px) {
        .form-group {
            width: 100%; /* Pada layar kecil, form akan menjadi satu kolom */
        }
    }
    </style>
</head>
    <h2>{{ isset($konfigurasi->id) ? 'Update' : 'Create' }} Konfigurasi</h2>

    <!-- Alert untuk menampilkan pesan sukses -->
    @if(session('success'))
    <div class="alert-container">
        <div class="alert">
            <i class="fas fa-check-circle"></i> <!-- Ikon centang -->
            <span class="alert-message">Data berhasil disimpan!</span>
        </div>
    </div>
    @endif

    <!-- Alert untuk menampilkan pesan error -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storekonfigurasi') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $konfigurasi->id }}">

        <div class="form-row">
            <div class="form-group">
                <label for="logo">Logo:</label>
                <input type="file" name="logo" id="logo">
                @if ($konfigurasi->logo)
                    <img src="{{ Storage::url('public/logos/' . $konfigurasi->logo) }}" alt="Current Logo" style="max-width: 100px; margin-top: 10px;">
                    <input type="hidden" name="logo_lama" value="{{ $konfigurasi->logo }}">
                @endif
            </div>

            <div class="form-group">
                <label for="title_img">Iqon Title:</label>
                <input type="file" name="title_img" id="title_img">
                @if ($konfigurasi->title_img)
                    <img src="{{ Storage::url('public/title_images/' . $konfigurasi->title_img) }}" alt="Current Title Image" style="max-width: 100px; margin-top: 10px;">
                    <input type="hidden" name="title_img_lama" value="{{ $konfigurasi->title_img }}">
                @endif
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="judul_logo">Nama Website:</label>
                <input type="text" name="judul_logo" id="judul_logo" value="{{ old('judul_logo', $konfigurasi->judul_logo) }}">
            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" value="{{ old('title', $konfigurasi->title) }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="map">Map:</label>
                <input type="text" name="map" id="map" value="{{ old('map', $konfigurasi->map) }}">
            </div>

            <div class="form-group">
                <label for="alamat">alamat:</label>
                <input type="text" name="alamat" id="alamat" value="{{ old('alamat', $konfigurasi->alamat) }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="instagram">Link Instagram:</label>
                <input type="text" name="instagram" id="instagram" value="{{ old('instagram', $konfigurasi->instagram) }}">
            </div>

            <div class="form-group">
                <label for="facebook">Link Facebook:</label>
                <input type="text" name="facebook" id="facebook" value="{{ old('facebook', $konfigurasi->facebook) }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="link_email">Link Email:</label>
                <input type="text" name="link_email" id="link_email" value="{{ old('link_email', $konfigurasi->link_email) }}">
            </div>

            <div class="form-group">
                <label for="email">Nama Email:</label>
                <input type="text" name="email" id="email" value="{{ old('email', $konfigurasi->email) }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="telepon">Telepon:</label>
                <input type="text" name="telepon" id="telepon" value="{{ old('telepon', $konfigurasi->telepon) }}">
            </div>

            <div class="form-group">
                <label for="footer_name">Nama Footer:</label>
                <input type="text" name="footer_name" id="footer_name" value="{{ old('footer_name', $konfigurasi->footer_name) }}">
            </div>
        </div>
        <button type="submit" class="btn">{{ isset($konfigurasi->id) ? 'Update' : 'Create' }}</button>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Tampilkan alert dan kemudian hilangkan setelah 3 detik
            setTimeout(() => {
                document.querySelector('.alert-container').classList.add('show');
                setTimeout(() => {
                    document.querySelector('.alert-container').classList.remove('show');
                }, 3000); // Waktu tampil sebelum menghilang
            }, 100); // Waktu delay sebelum tampil
        });
    </script>
@endsection
