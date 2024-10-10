@extends('admin.loyouts')
@section('Konten')

    <head>
        <link rel="stylesheet" href="{{ asset('stylee/view.css') }}">
    </head>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <h1>Daftar Kategori Artikel</h1>
        <a href="{{ route('createkategoriartikel') }}" class="button">Tambah Kategori</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategoriartikels as $kategoriartikel)
                    <tr>
                        <td>{{ $kategoriartikel->id }}</td>
                        <td>{{ $kategoriartikel->nama_kategori }}</td>
                        <td>
                            <a href="{{ route('editkategoriartikel', $kategoriartikel->id) }}">Edit</a>
                            <form action="{{ route('destroykategoriartikel', $kategoriartikel->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
