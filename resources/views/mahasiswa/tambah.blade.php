@extends('layout/main')

@section('title', 'Halaman Tambah Mahasiswa')

@section('konten')
<div class="row">
    <div class="col-6">
        <form method="POST" action="/mahasiswa">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama.... " value="{{old('nama')}}">
                @error('nama')
                <div class="h6 text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email.... " value="{{old('email')}}">
                @error('email')
                <div class="h6 text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" placeholder="NIM...." value="{{old('nim')}}">
                @error('nim')
                <div class="h6 text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Jurusan...." value="{{old('jurusan')}}">
                @error('jurusan')
                <div class="h6 text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection