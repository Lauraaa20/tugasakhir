@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Nilai')

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Tables </span>
</h4>

<!-- Responsive Table -->
<div class="card">
    <h5 class="card-header">Nilai</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr class="text-nowrap">
                    <th>#</th>
                    <th>Nama</th>
                    <th>Writing</th>
                    <th>Reading</th>
                    <th>Listening</th>
                    <th>Rata-Rata</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nilai as $record)
                <tr>
                    <th scope="row"></th>
                    <td>{{$record->nama}}</td>
                    <td>{{$record->writing}}</td>
                    <td>{{$record->reading}}</td>
                    <td>{{$record->listening}}</td>
                    <td>{{$record->rata_rata}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Actions">
                            <a href="" class="btn btn-blue"><i class="bx bx-edit-alt"></i> Edit</a>
                            <form action=>
                                <button type="submit" class="btn btn-white" onclick="return confirm('Are you sure you want to delete this classification?')">
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