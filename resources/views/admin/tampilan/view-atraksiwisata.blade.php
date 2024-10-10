@extends('admin.loyouts')
@section('title', '')
@section('title2', '')
@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/view.css') }}">
</head>
<div class="container">
    <div class="header">
        <h2>All Layanan</h2>
        <a href="{{ route('createAtraksiWisata') }}" class="btn-custom">Tambah Layanan</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($atraksiWisata as $atraksi)
                <tr>
                    <td>{{ $atraksi->id }}</td>
                    <td><img src="{{ asset('storage/' . $atraksi->path) }}" alt="Atraksi Wisata Image" width="100"></td>
                    <td class="truncate-text">{{ $atraksi->title }}</td>
                    <td class="truncate-text">{{ $atraksi->description }}</td>
                    <td class="truncate-text">{{ $atraksi->price }}</td>
                    <td>
                        <a href="{{ route('editAtraksiWisata', $atraksi->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('destroyAtraksiWisata', $atraksi->id) }}" method="POST" style="display:inline-block;">
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
