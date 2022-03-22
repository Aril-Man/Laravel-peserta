@extends('layouts.master')
@section('title')
    <title>Data Peserta</title>
@endsection
@section('content')
    <div class="container pt-2">
        <div class="pb-3">
            <a href="/cetakPeserta" class="btn btn-success pb">Cetak Laporan</a>
            <a href="/peserta/create" class="btn btn-primary pb">Create</a>
        </div>

        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No.Reg</th>
                    <th scope="col">Nama</th>
                    <th scope="col">JK</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Asal Sekolah</th>
                    <th scope="col">Minat Jurusan</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pesertas as $peserta)
                    <tr>
                        <th scope="row">{{ $peserta->id }}</th>
                        <td>{{ $peserta->nama }}</td>
                        <td>{{ $peserta->jk }}</td>
                        <td>{{ $peserta->alamat }}</td>
                        <td>{{ $peserta->agama }}</td>
                        <td>{{ $peserta->asal_sekolah }}</td>
                        <td>{{ $peserta->minat_jurusan }}</td>
                        <td>
                            <a href="/peserta/{{ $peserta->id }}/edit" class="btn btn-warning">Edit</a>
                            <a href="/peserta/{{ $peserta->id }}/delete" class="btn btn-danger"
                                onclick="return confirm('Yakin Mau diHapus?')">Delete</a>
                            <a href="/peserta/cetakPesertasingle/{{ $peserta->id }}" class="btn btn-success">Cetak</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
