@extends('admin.loyouts')
@section('Konten')
<head>
    <link rel="stylesheet" href="{{ asset('stylee/view.css') }}">
</head>
<div class="container">
    <div class="header">
        <h2>All Why Us</h2>
        
        <!-- Tampilkan tombol hanya jika tidak ada title yang sama -->
        @if(count($existingTitle) == 0)
            <a href="{{ route('createWhyUs') }}" class="btn-custom">Tambah Why Us</a>
        @endif
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($whyus as $whyus)
                <tr>
                    <td>{{ $whyus->id }}</td>
                    <td>{{ $whyus->title }}</td>
                    
                    <!-- Pastikan description ditampilkan sebagai string -->
                    <td>{{ is_array($whyus->description) ? implode(', ', $whyus->description) : $whyus->description }}</td>
                    
                    <td>
                        <a href="{{ route('editWhyUs', $whyus->title) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>

                        <form action="{{ route('destroyWhyUs', $whyus->title) }}" method="POST" style="display:inline-block;">
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
