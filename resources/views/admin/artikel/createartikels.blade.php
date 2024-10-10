@extends('admin.loyouts')
@section('Konten')

    <head>
        <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
    </head>
    <div class="container">
        <a href="{{ url()->previous() }}" class="btn-back">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h2>Tambah Artikel</h2>
        <form action="{{ route('storeartikels') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="kategori_artikel_id">Kategori Artikel:</label>
                <select name="kategori_artikel_id" id="kategori_artikel_id" required>
                    @foreach ($kategoriartikels as $kategoriartikel)
                        <option value="{{ $kategoriartikel->id }}">{{ $kategoriartikel->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Judul Artikel:</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div class="form-group">
                <label for="path">Gambar Artikel 1:1 :</label>
                <input type="file" name="path" id="path" required>
            </div>
            <div class="form-group">
                <label for="short_description">Deskripsi Singkat:</label>
                <input type="text" name="short_description" id="short_description">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi:</label>
                <textarea name="description" id="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script>
        // Inisialisasi CKEditor pada textarea dengan id description
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
