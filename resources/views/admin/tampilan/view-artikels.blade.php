@extends('admin.loyouts')

@section('title', '')
@section('title2', '')

@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/view.css') }}">
</head>
<div class="container">
    <div class="header">
        <h2>Daftar Artikel</h2>
        <div>
            <a href="{{ route('createartikels') }}" class="btn-custom" >Tambah Artikel</a>
            <a href="{{ route('kategoriartikel') }}" class="btn-custom">Tambah Kategori Artikel</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Gambar</th>
                <th>Deskripsi Singkat</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($artikels as $artikel)
                <tr>
                    <td>{{ $artikel->id }}</td>
                    <td>{{ $artikel->title }}</td>
                    <td>{{ $artikel->kategoriartikel->nama_kategori }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $artikel->path) }}" alt="{{ $artikel->title }}" style="width: 100px; height: auto;">
                    </td>
                    <td class="truncate-text">{{ $artikel->short_description }}</td>
                    <td class="truncate-text">{{ $artikel->description }}</td>
                    <td>
                        <a href="{{ route('editartikels', $artikel->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('destroyartikels', $artikel->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@endsection
