<!-- resources/views/kartukendali/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Edit Kartu Kendali')

@section('content')
<!-- Your existing content goes here -->
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Edit Kartu Kendali</span>
</h4>

<form action="{{ route('kartukendali.update', $kartukendali->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            Form Edit Data Kartu Kendali
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$kartukendali->nama}}">
                </div>
                <div class="mb-3">
                    <label for="minggu1" class="form-label">Minggu 1</label>
                    <input type="text" class="form-control" id="minggu1" name="minggu1" value="{{$kartukendali->minggu1}}">
                </div>
                <div class="mb-3">
                    <label for="minggu2" class="form-label">Minggu 2</label>
                    <input type="text" class="form-control" id="minggu2" name="minggu2" value="{{$kartukendali->minggu2}}">
                </div>
                <div class="mb-3">
                    <label for="minggu3" class="form-label">Minggu 3</label>
                    <input type="text" class="form-control" id="minggu3" name="minggu3" value="{{$kartukendali->minggu3}}">
                </div>
                <div class="mb-3">
                    <label for="minggu4" class="form-label">Minggu 4</label>
                    <input type="text" class="form-control" id="minggu4" name="minggu4" value="{{$kartukendali->minggu4}}">
                </div>
                <div class="mb-3">
                    <label for="pencapaian" class="form-label">Pencapaian</label>
                    <input type="text" class="form-control" id="pencapaian" name="pencapaian" value="{{$kartukendali->pencapaian}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endsection