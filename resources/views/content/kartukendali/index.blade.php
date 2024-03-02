@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Kartu Kendali')

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Tables Kartu Kendali</span>
</h4>

<!-- Responsive Table -->
<div class="card">
    <h5 class="card-header">Kartu Kendali</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr class="text-nowrap">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Pertemuan 1</th>
                    <th>Pertemuan 2</th>
                    <th>Pertemuan 3</th>
                    <th>Pertemuan 4</th>
                    <th>Pertemuan 5</th>
                    <th>Pertemuan 6</th>
                    <th>Pertemuan 7</th>
                    <th>Pencapaian</th>
                    <th>Actions</th>
                    <th>
                        <a href="{{ route('kartukendali.create') }}">
                            <i class='bx bx-plus'></i>
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kartukendali as $record)
                <tr>
                    <th scope="row">{{$record->id}}</th>
                    <td>{{$record->nama}}</td>
                    <td>{{$record->pert_1}}</td>
                    <td>{{$record->pert_2}}</td>
                    <td>{{$record->pert_3}}</td>
                    <td>{{$record->pert_4}}</td>
                    <td>{{$record->pert_5}}</td>
                    <td>{{$record->pert_6}}</td>
                    <td>{{$record->pert_7}}</td>
                    <td>{{$record->pencapaian}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Actions">
                            <a href="{{route('kartukendali.edit', $record->id)}}" class="btn btn-blue"><i class="bx bx-edit-alt"></i> Edit</a>
                            <form action="{{route('kartukendali.delete', $record->id)}}" method="POST">
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