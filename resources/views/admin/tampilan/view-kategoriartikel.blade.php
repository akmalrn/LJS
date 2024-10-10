@extends('admin.loyouts')
@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/view.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<div class="container">
    <a href="{{ route('artikels') }}" class="btn-back">
        <i class="fas fa-arrow-left"></i>
    </a>
    <div class="header">
        <h2>Daftar Kategori Artikel</h2>
        <a href="{{ route('createkategoriartikel') }}" class="btn btn-primary">Tambah Kategori</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategoriartikels as $kategoriartikel)
                <tr>
                    <td>{{ $kategoriartikel->id }}</td>
                    <td>{{ $kategoriartikel->nama_kategori }}</td>
                    <td>
                        <a href="{{ route('editkategoriartikel', $kategoriartikel->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('destroykategoriartikel', $kategoriartikel->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
