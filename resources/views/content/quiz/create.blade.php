<!-- resources/views/quiz/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Add Quiz')

@section('content')
<!-- Your existing content goes here -->
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Add Quiz</span>
</h4>

<form action="{{ route('quiz.insert') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            Form Input Data Quiz
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="soal" class="form-label">Soal</label>
                    <input type="text" class="form-control" id="soal" name="soal">
                </div>
                <div class="mb-3">
                    <label for="jawaban" class="form-label">Jawaban</label>
                    <input type="text" class="form-control" id="jawaban" name="jawaban">
                </div>
                <div class="mb-3">
                    <label for="jawaban_benar" class="form-label">Jawaban Benar</label>
                    <input type="text" class="form-control" id="jawaban_benar" name="jawaban_benar">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endsection