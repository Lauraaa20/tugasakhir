@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Placement Tes')

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Tables </span>
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Placement Tes</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Soal</th>
                    <th>Jawaban</th>
                    <th>Jawaban Benar</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>Siapa Nama Kamu?</td>
                    <td>
                        A. Laura
                        B. Cinta
                        C. Cantik
                    </td>
                    <td>
                        A.Laura
                    </td>
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
            </tbody>
        </table>
    </div>
</div>
<!--/ Basic Bootstrap Table -->
@endsection