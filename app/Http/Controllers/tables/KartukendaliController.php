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
            "pert_1" => $request->pert_1,
            "pert_2" => $request->pert_2,
            "pert_3" => $request->pert_3,
            "pert_4" => $request->pert_4,
            "pert_5" => $request->pert_5,
            "pert_6" => $request->pert_6,
            "pert_7" => $request->pert_7,
            "pencapaian" => $request->pencapaian,
        ]);

        return redirect()->route("kartukendali")->with("success", "Data Berhasil Disimpan!");
    }
    public function update(Request $request, $kartukendaliId)
    {
        $kartukendali = KartuKendali::find($kartukendaliId);
        $kartukendali->update([
            "nama" => $request->nama,
            "pertemuan1" => $request->pertemuan1,
            "pertemuan2" => $request->pertemuan2,
            "pertemuan3" => $request->pertemuan3,
            "pertemuan4" => $request->pertemuan4,
            "pertemuan5" => $request->pertemuan5,
            "pertemuan6" => $request->pertemuan6,
            "pertemuan7" => $request->pertemuan7,
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
