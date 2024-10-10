@extends('admin.loyouts')
@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/buatdanedit.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<div class="container">
    <a href="{{ route('benefit') }}" class="btn-back">
        <i class="fas fa-arrow-left"></i>
    </a>
    <h2>Edit Benefit</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('updatebenefit', $benefit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $benefit->title }}" required>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" value="{{ $benefit->description }}" required>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="urutan">Urutan:</label>
            <input type="number" id="urutan" name="urutan" value="{{ $benefit->urutan }}" required>
            @error('urutan')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="path">Upload Gambar :</label>
            <input type="file" id="path" name="path" accept="image/*">
            @error('path')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        @if($benefit->path)
            <div class="form-group">
                <label>Gambar Saat Ini:</label><br>
                <img src="{{ asset('storage/' . $benefit->path) }}" alt="Current Image" style="max-width: 200px;">
            </div>
        @endif
        <button type="submit" class="btn">Update</button>
    </form>
</div>
@endsection
