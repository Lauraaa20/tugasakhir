<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use App\Models\Classification;
use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    public function index()
    {
        $classification = Classification::all();
        return view('content.classification.index', compact('classification'));
    }

    public function create()
    {
        return view('content.classification.create');
    }
}
