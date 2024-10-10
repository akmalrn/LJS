@extends('admin.loyouts')
@section('Konten')

    <head>
        <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <div class="container">
        <a href="{{ url()->previous() }}" class="btn-back">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h2>Edit About Us</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('updateAboutUs', $aboutUs->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="path">Gambar :</label>
                <input type="file" id="path" name="path">
                @if ($aboutUs->path)
                    <p>Current Image:</p>
                    <img src="{{ asset('storage/' . $aboutUs->path) }}" alt="Current Image" width="100">
                @endif
                @error('path')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="short_description">Overview (optional):</label>
                <input type="text" id="short_description" name="short_description" value="{{ $aboutUs->short_description }}">
                @error('short_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" id="description" name="description" value="{{ $aboutUs->description }}" required>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn">Update</button>
        </form>
    </div>
@endsection
