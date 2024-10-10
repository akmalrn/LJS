@extends('admin.loyouts')
@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/view.css') }}">
</head>
<div class="container">
    <div class="header">
        <h2>All About Us</h2>
        <a href="{{ route('createaboutus') }}" class="btn-custom">Tambah AboutUs</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Overview</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aboutUs as $aboutUs)
                <tr>
                    <td>{{ $aboutUs->id }}</td>
                    <td><img src="{{ asset('storage/' . $aboutUs->path) }}" alt="aboutUs Image" width="100"></td>
                    <td class="truncate-text">{{ $aboutUs->short_description }}</td>
                    <td class="truncate-text">{{ $aboutUs->description }}</td>
                    <td>
                        <a href="{{ route('editAboutUs', $aboutUs->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('destroyAboutUs', $aboutUs->id) }}" method="POST" style="display:inline-block;">
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
