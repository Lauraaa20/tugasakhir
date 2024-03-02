<!-- resources/views/jadwal/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Edit Jadwal')

@section('content')
<!-- Your existing content goes here -->
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Edit Jadwal</span>
</h4>

<form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            Form Edit Data Jadwal
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="tutor" class="form-label">Tutor</label>
                    <input type="text" class="form-control" id="tutor" name="tutor" value="{{$jadwal->tutor}}">
                </div>
                <div class="mb-3">
                    <label for="mapel" class="form-label">Mapel</label>
                    <input type="text" class="form-control" id="mapel" name="mapel" value="{{$jadwal->mapel}}">
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" class="form-control" id="kelas" name="kelas" value="{{$jadwal->kelas}}">
                </div>
                <div class="mb-3">
                    <label for="jam" class="form-label">Jam</label>
                    <input type="text" class="form-control" id="jam" name="jam" value="{{$jadwal->jam}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endsection