<!-- resources/views/student/edit.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Edit Student')

@section('content')
<div class="card">
    <h5 class="card-header">Form Edit Student</h5>
    <div class="card-body">
        <form action="{{ route('student.update', $student->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $student->nama }}">
            </div>

            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" value="{{ $student->nik }}">
            </div>
            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tgl Lahir</label>
                <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $student->tgl_lahir }}">
            </div>
            <div class="mb-3">
                <label for="agama" class="form-label">Agama</label>
                <input type="text" class="form-control" id="agama" name="agama" value="{{ $student->agama }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $student->alamat }}">
            </div>
            <div class="mb-3">
                <label for="nama_ortu" class="form-label">Nama Ortu</label>
                <input type="text" class="form-control" id="nama_ortu" name="nama_ortu" value="{{ $student->nama_ortu }}">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No.Hp</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $student->no_hp }}">
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $student->kelas }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection