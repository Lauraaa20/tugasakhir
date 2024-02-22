<!-- resources/views/sertifikat/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Add Sertifikat')

@section('content')
<!-- Your existing content goes here -->
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Add Sertifikat</span>
</h4>

<form action="{{ route('sertifikat.create') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            Form Input Data Sertifikat
        </div>
        <div class="card-body">
            <form>
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
        </div>
    </div>
    @endsection