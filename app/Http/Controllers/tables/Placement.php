<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Placement extends Controller
{
    public function index()
    {
        return view('content.tables.placement');
    }
}
