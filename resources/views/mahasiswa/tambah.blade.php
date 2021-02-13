@extends('layout/main')

@section('title', 'Halaman Tambah Mahasiswa')

@section('konten')
<div class="row">
    <div class="col-6">
        <form method="POST" action="/mahasiswa">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama....">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" placeholder="NIM....">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" placeholder="Jurusan....">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection