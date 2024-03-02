<!-- resources/views/classification/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Edit Classification')

@section('content')
<!-- Your existing content goes here -->
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Edit Classification</span>
</h4>

<form action="{{ route('classification.update', $classification->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            Form Edit Data Classification
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$classification->nama}}">
                </div>
                <div class="mb-3">
                    <label for="jenjang" class="form-label">Jenjang</label>
                    <input type="text" class="form-control" id="jenjang" name="jenjang" value="{{$classification->jenjang}}">
                </div>
                <div class="mb-3">
                    <label for="nilai" class="form-label">Nilai</label>
                    <input type="text" class="form-control" id="nilai" name="nilai" value="{{$classification->nilai}}">
                </div>
                <div class="mb-3">
                    <label for="hasil_kelas" class="form-label">Hasil Kelas</label>
                    <input type="text" class="form-control" id="hasil_kelas" name="hasil_kelas" value="{{$classification->hasil_kelas}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endsection