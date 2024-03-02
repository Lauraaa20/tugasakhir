<!-- resources/views/jadwal/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Add Jadwal')

@section('content')
<!-- Your existing content goes here -->
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Add Jadwal</span>
</h4>

<form action="{{ route('jadwal.insert') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            Form Input Data Jadwal
        </div>
        <div class="card-body">
            <form>
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
        </div>
    </div>
    @endsection