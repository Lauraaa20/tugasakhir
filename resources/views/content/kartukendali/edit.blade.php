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
                    <label for="pertemuan1" class="form-label">Pertemuan 1</label>
                    <input type="text" class="form-control" id="pertemuan1" name="pertemuan1" value="{{$kartukendali->pertemuan1}}">
                </div>
                <div class="mb-3">
                    <label for="pertemuan2" class="form-label">Pertemuan 2</label>
                    <input type="text" class="form-control" id="pertemuan2" name="pertemuan2" value="{{$kartukendali->pertemuan2}}">
                </div>
                <div class="mb-3">
                    <label for="pertemuan3" class="form-label">Pertemuan 3</label>
                    <input type="text" class="form-control" id="pertemuan3" name="pertemuan3" value="{{$kartukendali->pertemuan3}}">
                </div>
                <div class="mb-3">
                    <label for="pertemuan4" class="form-label">Pertemuan 4</label>
                    <input type="text" class="form-control" id="pertemuan4" name="pertemuan4" value="{{$kartukendali->pertemuan4}}">
                </div>
                <div class="mb-3">
                    <label for="pertemuan5" class="form-label">Pertemuan 5</label>
                    <input type="text" class="form-control" id="pertemuan5" name="pertemuan5" value="{{$kartukendali->pertemuan5}}">
                </div>
                <div class="mb-3">
                    <label for="pertemuan6" class="form-label">Pertemuan 6</label>
                    <input type="text" class="form-control" id="pertemuan6" name="pertemuan6" value="{{$kartukendali->pertemuan6}}">
                </div>
                <div class="mb-3">
                    <label for="pertemuan7" class="form-label">Pertemuan 7</label>
                    <input type="text" class="form-control" id="pertemuan7" name="pertemuan7" value="{{$kartukendali->pertemuan7}}">
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