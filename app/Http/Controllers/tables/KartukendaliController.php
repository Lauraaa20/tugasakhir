<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KartuKendali;

class KartuKendaliController extends Controller
{
    public function index()
    {
        $kartukendali = KartuKendali::all();
        return view('content.kartukendali.index', compact('kartukendali'));
    }
}
