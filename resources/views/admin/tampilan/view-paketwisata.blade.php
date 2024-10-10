@extends('admin.loyouts')
@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/view.css') }}">
</head>
<div class="container">
    <div class="header">
    <h2>All Layanan 2</h2>
    <a href="{{ route('createPaketWisata') }}" class="btn-custom">Tambah Layanan 2</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paketWisata as $atraksi)
                <tr>
                    <td>{{ $atraksi->id }}</td>
                    <td><img src="{{ asset('storage/' . $atraksi->path) }}" alt="Atraksi Wisata Image" width="100"></td>
                    <td>{{ $atraksi->description }}</td>
                    <td>{{ $atraksi->price }}</td>
                    <td>
                        <a href="{{ route('editPaketWisata', $atraksi->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('destroyPaketWisata', $atraksi->id) }}" method="POST" style="display:inline-block;">
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
