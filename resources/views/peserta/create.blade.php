@extends('layouts.master')
@section('title')
    <title>Create Data Peserta</title>
@endsection
@section('content')
    <form class="container pt-3" action="/peserta/create" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input name="nama" type="text" class="form-control" placeholder="Masukan Nama Anda!" id="exampleInputEmail1"
                required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
            <select name="jk" class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Pilih jenis kelamin</option>
                <option value="Laki-laki">Laki laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <textarea name="alamat" placeholder="Masukan Alamat Rumah anda!" class="form-control" id="floatingTextarea2"
                style="height: 100px"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Agama</label>
            <select name="agama" class="form-select" id="minat_jurusan" required>
                <option selected disabled value="">Pilih Agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Katolik">Katolik</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Asal Sekolah</label>
            <input name="asal_sekolah" placeholder="Masukan Asal Sekolah Anda!" type="text" class="form-control"
                id="exampleInputEmail1" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Minat Jurusan</label>
            <select name="minat_jurusan" class="form-select" id="minat_jurusan" required>
                <option selected disabled value="">Pilih minat</option>
                <option value="RPL">Rekayasa Perangkat Lunak</option>
                <option value="MMD">Multimedia</option>
                <option value="TBG">Tata Boga</option>
                <option value="TKJ">Teknik Komputer Jaringan</option>
                <option value="BDP">Bisnis Daring Pemasaran</option>
                <option value="OTKP">Perkantoran</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
