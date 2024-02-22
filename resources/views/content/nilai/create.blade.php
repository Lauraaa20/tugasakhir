<!-- resources/views/nilai/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Add Nilai')

@section('content')
<!-- Your existing content goes here -->
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Add Nilai</span>
</h4>

<form action="{{ route('nilai.create') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            Form Input Data Nilai
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="writing" class="form-label">Writing</label>
                    <input type="text" class="form-control" id="writing" name="writing">
                </div>
                <div class="mb-3">
                    <label for="reading" class="form-label">Reading</label>
                    <input type="text" class="form-control" id="reading" name="reading">
                </div>
                <div class="mb-3">
                    <label for="listening" class="form-label">Listening</label>
                    <input type="text" class="form-control" id="listening" name="listening">
                </div>
                <div class="mb-3">
                    <label for="rata_rata" class="form-label">Rata-Rata</label>
                    <input type="text" class="form-control" id="rata_rata" name="rata_rata">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
            @endsection