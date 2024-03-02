@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Placement Tes')

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Tables Placement Tes</span>
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Placement Tes</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Soal</th>
                    <th>Jawaban</th>
                    <th>Jawaban Benar</th>
                    <th>Actions</th>
                    <th>
                        <a href="{{ route('placement.create') }}">
                            <i class='bx bx-plus'></i>
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($placement as $record)
                <tr>
                    <th scope="row">{{$record->id}}</th>
                    <td>{{$record->soal}}</td>
                    <td>{{$record->jawaban}}</td>
                    <td>{{$record->jawaban_benar}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Actions">
                            <a href="{{route('placement.edit', $record->id)}}" class="btn btn-blue"><i class="bx bx-edit-alt"></i> Edit</a>
                            <form action="{{route('placement.delete', $record->id)}}" method="POST">
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
<!--/ Basic Bootstrap Table -->
@endsection