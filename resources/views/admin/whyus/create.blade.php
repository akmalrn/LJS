@extends('admin.loyouts')
@section('Konten')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>{{ $whyUs->id ? 'Update' : 'Create' }} Why Us</title>
    <style>
        .form-group {
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
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
</head>
<body>
    <h2>{{ isset($whyUs->id) ? 'Update' : 'Create' }} Why Us</h2>

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

    <form action="{{ route('storeWhyUs') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $whyUs->id ?? '' }}">

        <div class="form-group">
            <label for="title">Title :</label>
            <input type="text" name="title" id="title" value="{{ old('title', $whyUs->title ?? '') }}">
        </div>

        <div>
            <label for="description">Description :</label>
            <textarea name="description" id="description">{{ old('description', $whyUs->description ?? '') }}</textarea>
        </div>

        <button type="submit" class="btn">{{ isset($whyUs->id) ? 'Update' : 'Create' }}</button>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Tampilkan alert dan kemudian hilangkan setelah 3 detik
            setTimeout(() => {
                const alertContainer = document.querySelector('.alert-container');
                if (alertContainer) {
                    alertContainer.classList.add('show');
                    setTimeout(() => {
                        alertContainer.classList.remove('show');
                    }, 3000); // Waktu tampil sebelum menghilang
                }
            }, 100); // Waktu delay sebelum tampil

            // Inisialisasi CKEditor untuk field description
            ClassicEditor
                .create(document.querySelector('#description'))
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
</body>
@endsection
