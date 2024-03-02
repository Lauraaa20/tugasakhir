@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Tutor')

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Tables Tutor</span>
</h4>

<!-- Responsive Table -->
<div class="card">
    <h5 class="card-header">Tutor</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr class="text-nowrap">
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Alamat</th>
                    <th>Foto</th>
                    <th>Actions</th>
                    <th>
                        <a href="{{ route('tutor.create') }}">
                            <i class='bx bx-plus'></i>
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tutor as $record)
                <tr>
                    <th scope="row">{{$record->id}}</th>
                    <td>{{$record->nama}}</td>
                    <td>{{$record->nik}}</td>
                    <td>{{$record->alamat}}</td>
                    <td><a href="/images/tutor/{{$record->foto}}">Lihat</a></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Actions">
                            <a href="{{route('tutor.edit', $record->id)}}" class="btn btn-blue"><i class="bx bx-edit-alt"></i> Edit</a>
                            <form action="{{route('tutor.delete', $record->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-white" onclick="return confirm('Apakah Kamu Yakin?')">
                                    </i class="bx bx-trash"> Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!--/ Responsive Table -->
@endsection