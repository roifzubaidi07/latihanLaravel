@extends('layout/main')

@section('title', 'Halaman Mahasiswa')

@section('konten')
<div class="row">
    <h1>Daftar Mahasiswa!</h1>
    <div class="col-6">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <a href="mahasiswa/tambah" class="btn btn-primary">Tambah Mahasiswa</a>
        <ul class="list-group mt-2">
            @foreach($student as $row)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?= $row->nama ?>
                <a href="mahasiswa/<?= $row->id; ?>" class="badge bg-info rounded-pill">info</a>
            </li>
            @endforeach
        </ul>

    </div>
</div>
@endsection