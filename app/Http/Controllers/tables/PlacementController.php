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

    public function create()
    {
        return view('content.placement.create');
    }

    public function edit(Request $request, $placementId)
    {
        $placement = Placement::find($placementId);
        return view('content.placement.edit', compact('placement'));
    }

    public function insert(Request $request)
    {
        Placement::create([
            "soal" => $request->soal,
            "jawaban" => $request->jawaban,
            "jawaban_benar" => $request->jawaban_benar,
        ]);

        return redirect()->route("placement")->with("success", "Data Berhasil Disimpan!");
    }
    public function update(Request $request, $placementId)
    {
        $placement = Placement::find($placementId);
        $placement->update([
            "soal" => $request->soal,
            "jawaban" => $request->jawaban,
            "jawaban_benar" => $request->jawaban_benar,
        ]);

        return redirect()->route("placement")->with("success", "Data Berhasil Diperbarui!");
    }

    public function destroy(Request $request, $placementId)
    {
        $id = $placementId;
        $placement = Placement::find($id);

        $placement->delete();

        return redirect()->route("placement")->with("success", "Data Berhasil Dihapus!");
    }
}
