<!-- resources/views/tutor/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Create Tutor')

@section('content')
<!-- Your existing content goes here -->

<form action="{{ route('tutor.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="text" class="form-control" id="nik" name="nik">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat">
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="text" class="form-control" id="foto" name="foto">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection