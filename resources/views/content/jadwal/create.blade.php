<!-- resources/views/jadwal/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Create Jadwal')

@section('content')
<!-- Your existing content goes here -->

<form action="{{ route('jadwal.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="tutor" class="form-label">Tutor</label>
        <input type="text" class="form-control" id="tutor" name="tutor">
    </div>
    <div class="mb-3">
        <label for="mapel" class="form-label">Mapel</label>
        <input type="text" class="form-control" id="mapel" name="mapel">
    </div>
    <div class="mb-3">
        <label for="kelas" class="form-label">Kelas</label>
        <input type="text" class="form-control" id="kelas" name="kelas">
    </div>
    <div class="mb-3">
        <label for="jam" class="form-label">Jam</label>
        <input type="text" class="form-control" id="jam" name="jam">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection