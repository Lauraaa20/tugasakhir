<!-- resources/views/classification/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Create Classification')

@section('content')
<!-- Your existing content goes here -->

<form action="{{ route('classification.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="mb-3">
        <label for="jenjang" class="form-label">Jenjang</label>
        <input type="text" class="form-control" id="jenjang" name="jenjang">
    </div>
    <div class="mb-3">
        <label for="nilai" class="form-label">Nilai</label>
        <input type="text" class="form-control" id="nilai" name="nilai">
    </div>
    <div class="mb-3">
        <label for="hasil_kelas" class="form-label">Hasil Kelas</label>
        <input type="text" class="form-control" id="hasil_kelas" name="hasil_kelas">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection