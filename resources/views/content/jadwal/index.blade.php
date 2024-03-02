@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Jadwal')

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Tables Jadwal</span>
</h4>

<!-- Responsive Table -->
<div class="card">
    <h5 class="card-header">Jadwal</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr class="text-nowrap">
                    <th>No</th>
                    <th>Tutor</th>
                    <th>Mapel</th>
                    <th>Kelas</th>
                    <th>Jam</th>
                    <th>Actions</th>
                    <th>
                        <a href="{{ route('jadwal.create') }}">
                            <i class='bx bx-plus'></i>
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwal as $record)
                <tr>
                    <th scope="row">{{$record->id}}</th>
                    <td>{{$record->tutor}}</td>
                    <td>{{$record->mapel}}</td>
                    <td>{{$record->kelas}}</td>
                    <td>{{$record->jam}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Actions">
                            <a href="{{route('jadwal.edit', $record->id)}}" class="btn btn-blue"><i class="bx bx-edit-alt"></i> Edit</a>
                            <form action="{{route('jadwal.delete', $record->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-white" onclick="return confirm('Apakah Kamu Yakin?')">
                                    <i class="bx bx-trash"></i> Delete
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