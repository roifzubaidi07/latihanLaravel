@extends('layout/main')

@section('title', 'Detail Mahasiswa')

@section('konten')
<div class="row">
    <h1>Detail Mahasiswa!</h1>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $student->nama ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $student->nim ?></h6>
            <p class="card-text"><?= $student->jurusan ?></p>
            <a href="#" class="btn btn-info">Update</a>
            <a href="#" class="btn btn-danger">Delete</a>
            <a href="/mahasiswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>
@endsection