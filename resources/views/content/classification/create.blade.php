<!-- resources/views/classification/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Add Classification')

@section('content')
<!-- Your existing content goes here -->
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Add Classification</span>
</h4>

<form action="{{ route('classification.insert') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            Form Input Data Classification
        </div>
        <div class="card-body">
            <form>
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
        </div>
    </div>
    @endsection