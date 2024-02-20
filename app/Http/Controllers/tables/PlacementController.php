<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Placement;

class PlacementController extends Controller
{
    public function index()
    {
        $placement = Placement::all();
        return view('content.placement.index', compact('placement'));
    }
}
