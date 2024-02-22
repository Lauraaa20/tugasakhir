<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tutor;

class TutorController extends Controller
{
    public function index()
    {
        $tutor = Tutor::all();
        return view('content.tutor.index', compact('tutor'));
    }

    public function create()
    {
        return view('content.tutor.create');
    }
}
