<!-- resources/views/kartukendali/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Add Kartu Kendali')

@section('content')
<!-- Your existing content goes here -->
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Add Kartu Kendali</span>
</h4>

<form action="{{ route('kartukendali.insert') }}" method="POST">
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
                @for ($i = 1; $i < 8; $i++)
                    <div class="mb-3">
                        <p>Pertemuan {{$i}}</p>
                        <input type="radio" id="pert_{{$i}}_hadir" name="pert_{{$i}}" value="hadir">
                        <label for="pert_{{$i}}_hadir" class="form-label">Hadir</label>
                        <input type="radio" id="pert_{{$i}}_izin" name="pert_{{$i}}" value="izin">
                        <label for="pert_{{$i}}_izin" class="form-label">Izin</label>
                        <input type="radio" id="pert_{{$i}}_alpha" name="pert_{{$i}}" value="alpha">
                        <label for="pert_{{$i}}_alpha" class="form-label">Alpha</label>
                    </div>
                @endfor
                <div class="mb-3">
                    <label for="pencapaian" class="form-label">Pencapaian</label>
                    <input type="text" class="form-control" id="pencapaian" name="pencapaian">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endsection