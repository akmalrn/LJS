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
        <h2>Edit Artikel</h2>
        <form action="{{ route('updateartikels', $artikel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kategori_artikel_id">Kategori Artikel:</label>
                <select name="kategori_artikel_id" id="kategori_artikel_id" required>
                    @foreach ($kategoriartikels as $kategoriartikel)
                        <option value="{{ $kategoriartikel->id }}"
                            {{ $kategoriartikel->id == $artikel->kategori_artikel_id ? 'selected' : '' }}>
                            {{ $kategoriartikel->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Judul Artikel:</label>
                <input type="text" name="title" id="title" value="{{ $artikel->title }}" required>
            </div>
            <div class="form-group">
                <label for="path">Gambar Artikel (optional):</label>
                <input type="file" name="path" id="path">
                @if ($artikel->path)
                    <p>Current Image:</p>
                    <img src="{{ asset('storage/' . $artikel->path) }}" alt="{{ $artikel->title }}"
                        style="width: 100px; height: auto;">
                @endif
            </div>
            <div class="form-group">
                <label for="short_description">Deskripsi Singkat:</label>
                <input type="text" name="short_description" id="short_description"
                    value="{{ $artikel->short_description }}">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi:</label>
                <textarea name="description" id="description" required>{{ $artikel->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
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
