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
                    @for ($i = 1; $i <= 4; $i++) <th>Minggu {{$i}}</th>
                        @endfor
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
                    <td>{{$record->minggu1}}</td>
                    <td>{{$record->minggu2}}</td>
                    <td>{{$record->minggu3}}</td>
                    <td>{{$record->minggu4}}</td>
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