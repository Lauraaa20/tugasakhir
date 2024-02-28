@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Quiz')

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Tables Quiz</span>
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Quiz</h5>
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
                        <a href="{{ route('quiz.create') }}">
                            <i class='bx bx-plus'></i>
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($quiz as $record)
                <tr>
                    <th scope="row">{{$record->id}}</th>
                    <td>{{$record->soal}}</td>
                    <td>{{$record->jawaban}}</td>
                    <td>{{$record->jawaban_benar}}</td>
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
<!--/ Basic Bootstrap Table -->
@endsection