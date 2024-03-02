<!-- resources/views/placement/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Edit Placement')

@section('content')
<!-- Your existing content goes here -->
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Edit Placement</span>
</h4>

<form action="{{ route('placement.update', $placement->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            Form Edit Data Placement
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="soal" class="form-label">Soal</label>
                    <input type="text" class="form-control" id="soal" name="soal" value="{{$placement->soal}}">
                </div>
                <div class="mb-3">
                    <label for="jawaban" class="form-label">Jawaban</label>
                    <input type="text" class="form-control" id="jawaban" name="jawaban" value="{{$placement->jawaban}}">
                </div>
                <div class="mb-3">
                    <label for="jawaban_benar" class="form-label">Jawaban Benar</label>
                    <input type="text" class="form-control" id="jawaban_benar" name="jawaban_benar" value="{{$placement->jawaban_benar}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endsection