<!-- resources/views/sertifikat/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Create Sertifikat')

@section('content')
<!-- Your existing content goes here -->

<form action="{{ route('sertifikat.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="mb-3">
        <label for="sertifikat" class="form-label">Sertifikat</label>
        <input type="text" class="form-control" id="sertifikat" name="sertifikat">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection