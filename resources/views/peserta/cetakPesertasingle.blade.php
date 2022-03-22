@extends('layouts.master')

@section('title')
    <title>Cetak Laporan Data Peserta</title>
@endsection
@section('content')
    <h1 class="text-center">SMK Semangat 45</h1>
    <p>Nama : {{ $pesertas->nama }}</p>
    <p>Jenis Kelamin : {{ $pesertas->jk }}</p>
    <p>Alamat : {{ $pesertas->alamat }}</p>
    <p>Agama : {{ $pesertas->agama }}</p>
    <p>Asal Smp : {{ $pesertas->asal_sekolah }}</p>
    <p>Minat Jurusan: {{ $pesertas->minat_jurusan }}</p>


    <script type="text/javascript">
        window.print();
    </script>
@endsection
