<!-- resources/views/student/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Add Siswa')

@section('content')
<!-- Your existing content goes here -->
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Add Siswa</span>
</h4>

<form action="{{ route('student.create') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            Form Input Data Siswa
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik">
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Tgl Lahir</label>
                    <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir">
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <input type="text" class="form-control" id="agama" name="agama">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="mb-3">
                    <label for="nama_ortu" class="form-label">Nama Ortu</label>
                    <input type="text" class="form-control" id="nama_ortu" name="nama_ortu">
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">No.Hp</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp">
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" class="form-control" id="kelas" name="kelas">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endsection