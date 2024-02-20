<!-- resources/views/student/index.blade.php -->

@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Student')

@section('content')
<!-- Your existing content goes here -->

<div class="card">
    <h5 class="card-header">Student</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr class="text-nowrap">
                    <th>#</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Alamat</th>
                    <th>Agama</th>
                    <th>Nama Ortu</th>
                    <th>No.Hp</th>
                    <th>Pekerjaan Ortu</th>
                    <th>Kelas</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $record)
                <tr>
                    <th scope="row"></th>
                    <td>{{$record->nama}}</td>
                    <td>{{$record->nik}}</td>
                    <td>{{$record->alamat}}</td>
                    <td>{{$record->agama}}</td>
                    <td>{{$record->nama_ortu}}</td>
                    <td>{{$record->no_telp}}</td>
                    <td>{{$record->kerja_ortu}}</td>
                    <td>{{$record->level}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Actions">
                            <a href="" class="btn btn-blue"><i class="bx bx-edit-alt"></i> Edit</a>
                            <form action=>
                                <button type="submit" class="btn btn-white"
                                    onclick="return confirm('Are you sure you want to delete this classification?')">
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
@endsection