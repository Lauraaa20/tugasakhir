<!-- resources/views/kartukendali/create.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Add Kartu Kendali')

@section('content')

<?php
$i = 0;
?>
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
                @for ($x = 1; $x <= 4; $x++) <div>
                    <h2>Minggu ke-{{$x}}</h2>
        </div>
        @for ($p = 1; $p <= 8; $p++) <?php $i++ ?> <div class="mb-3">
            <p>Minggu {{$i}}</p>
            <input type="radio" id="minggu_{{$i}}_hadir" name="minggu{{$i}}" value="hadir">
            <label for="minggu{{$i}}_hadir" class="form-label">Hadir</label>
            <input type="radio" id="minggu{{$i}}_izin" name="minggu{{$i}}" value="izin">
            <label for="minggu{{$i}}_izin" class="form-label">Izin</label>
            <input type="radio" id="minggu{{$i}}_alpha" name="minggu{{$i}}" value="alpha">
            <label for="minggu{{$i}}_alpha" class="form-label">Alpha</label>
    </div>
    @endfor
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