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
            <a href="/mahasiswa/{{$student->id}}/ubah" class="btn btn-info">Update</a>
            <form method="POST" action="/{{$student->id}}/mahasiswa" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="/mahasiswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>
@endsection