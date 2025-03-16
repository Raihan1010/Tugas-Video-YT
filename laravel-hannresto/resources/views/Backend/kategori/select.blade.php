@extends('Backend.back')

@section('admincontent')
    <div>
        <h1>Kategori</h1>
    </div>
    <div>
        <a href="{{ url('admin/kategori/create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            @php
                $no=1;
            @endphp
            <tbody>
                @foreach ($kategoris as $kategori)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $kategori->kategori }}</td>
                        <td><a href="{{ url('admin/kategori/'.$kategori->idkategori.'/edit') }}" style="text-decoration: none">Ubah</a></td>
                        <td><a href="{{ url('admin/kategori/'.$kategori->idkategori) }}" style="text-decoration: none">Hapus</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection