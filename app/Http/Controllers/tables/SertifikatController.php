<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sertifikat;

class SertifikatController extends Controller
{
    public function index()
    {
        $sertifikat = Sertifikat::all();
        return view('content.sertifikat.index', compact('sertifikat'));
    }

    public function create()
    {
        return view('content.sertifikat.create');
    }
}
