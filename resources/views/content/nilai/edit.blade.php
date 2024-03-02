<!-- resources/views/nilai/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Edit Nilai')

@section('content')
<!-- Your existing content goes here -->
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Edit Nilai</span>
</h4>

<form action="{{ route('nilai.update', $nilai->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            Form Edit Data Nilai
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$nilai->nama}}">
                </div>
                <div class="mb-3">
                    <label for="writing" class="form-label">Writing</label>
                    <input type="text" class="form-control" id="writing" name="writing" value="{{$nilai->writing}}">
                </div>
                <div class="mb-3">
                    <label for="reading" class="form-label">Reading</label>
                    <input type="text" class="form-control" id="reading" name="reading" value="{{$nilai->reading}}">
                </div>
                <div class="mb-3">
                    <label for="listening" class="form-label">Listening</label>
                    <input type="text" class="form-control" id="listening" name="listening" value="{{$nilai->listening}}">
                </div>
                <div class="mb-3">
                    <label for="rata_rata" class="form-label">Rata-Rata</label>
                    <input type="text" class="form-control" id="rata_rata" name="rata_rata" value="{{$nilai->rata_rata}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endsection