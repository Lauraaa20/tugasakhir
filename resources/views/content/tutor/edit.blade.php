<!-- resources/views/tutor/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Add Tutor')

@section('content')
<!-- Your existing content goes here -->
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Edit Tutor</span>
</h4>

<form action="{{ route('tutor.update', $tutor->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            Form Edit Data Tutor
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$tutor->nama}}">
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" value="{{$tutor->nik}}">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{$tutor->alamat}}">
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endsection