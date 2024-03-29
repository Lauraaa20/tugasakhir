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

    public function create()
    {
        return view('content.kartukendali.create');
    }

    public function edit(Request $request, $kartukendaliId)
    {
        $kartukendali = KartuKendali::find($kartukendaliId);
        return view('content.kartukendali.edit', compact('kartukendali'));
    }

    public function insert(Request $request)
    {
        KartuKendali::create([
            "nama" => $request->nama,
            "minggu1" => $request->minggu1,
            "minggu2" => $request->minggu2,
            "minggu3" => $request->minggu3,
            "minggu4" => $request->minggu4,
            "pencapaian" => $request->pencapaian,
        ]);

        return redirect()->route("kartukendali")->with("success", "Data Berhasil Disimpan!");
    }
    public function update(Request $request, $kartukendaliId)
    {
        $kartukendali = KartuKendali::find($kartukendaliId);
        $kartukendali->update([
            "nama" => $request->nama,
            "minggu1" => $request->minggu1,
            "minggu2" => $request->minggu2,
            "minggu3" => $request->minggu3,
            "minggu4" => $request->minggu4,
            "pencapaian" => $request->pencapian,
        ]);

        return redirect()->route("kartukendali")->with("success", "Data Berhasil Diperbarui!");
    }

    public function destroy(Request $request, $kartukendaliId)
    {
        $id = $kartukendaliId;
        $kartukendali = KartuKendali::find($id);

        $kartukendali->delete();

        return redirect()->route("kartukendali")->with("success", "Data Berhasil Dihapus!");
    }
}
