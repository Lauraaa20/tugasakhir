<!-- resources/views/kartukendali/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Add Kartu Kendali')

@section('content')
<!-- Your existing content goes here -->
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Add Kartu Kendali</span>
</h4>

<form action="{{ route('kartukendali.create') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            Form Input Data Kartu Kendali
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="pert_1" class="form-label">Pertemuan 1</label>
                    <input type="text" class="form-control" id="pert_1" name="pert_1">
                </div>
                <div class="mb-3">
                    <label for="pert_2" class="form-label">Pertemuan 2</label>
                    <input type="text" class="form-control" id="pert_2" name="pert_2">
                </div>
                <div class="mb-3">
                    <label for="pert_3" class="form-label">Pertemuan 3</label>
                    <input type="text" class="form-control" id="pert_3" name="pert_3">
                </div>
                <div class="mb-3">
                    <label for="pert_4" class="form-label">Pertemuan 4</label>
                    <input type="text" class="form-control" id="pert_4" name="pert_4">
                </div>
                <div class="mb-3">
                    <label for="pert_5" class="form-label">Pertemuan 5</label>
                    <input type="text" class="form-control" id="pert_5" name="pert_5">
                </div>
                <div class="mb-3">
                    <label for="pert_6" class="form-label">Pertemuan 6</label>
                    <input type="text" class="form-control" id="pert_6" name="pert_6">
                </div>
                <div class="mb-3">
                    <label for="pert_7" class="form-label">Pertemuan 7</label>
                    <input type="text" class="form-control" id="pert_7" name="pert_7">
                </div>
                <div class="mb-3">
                    <label for="pencapian" class="form-label">Pencapaian</label>
                    <input type="text" class="form-control" id="pencapian" name="pencapian">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endsection