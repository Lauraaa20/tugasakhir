<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use App\Models\Siswa;

class StudentController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('content.student.index', compact('siswa'));
    }
}
