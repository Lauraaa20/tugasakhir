<!-- resources/views/nilai/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Create Nilai')

@section('content')
<!-- Your existing content goes here -->

<form action="{{ route('nilai.store') }}" method="POST">
    @csrf
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
@endsection