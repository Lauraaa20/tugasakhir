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

    public function edit(Request $request, $classificationId)
    {
        $classification = Classification::find($classificationId);
        return view('content.classification.edit', compact('classification'));
    }

    public function insert(Request $request)
    {
        Classification::create([
            "nama" => $request->nama,
            "jenjang" => $request->jenjang,
            "nilai" => $request->nilai,
            "hasil_kelas" => $request->hasil_kelas,
        ]);

        return redirect()->route("classification")->with("success", "Data Berhasil Disimpan!");
    }
    public function update(Request $request, $classificationId)
    {
        $classification = Classification::find($classificationId);
        $classification->update([
            "nama" => $request->nama,
            "jenjang" => $request->jenjang,
            "nilai" => $request->nilai,
            "hasil_kelas" => $request->hasil_kelas,
        ]);

        return redirect()->route("classification")->with("success", "Data Berhasil Diperbarui!");
    }

    public function destroy(Request $request, $classificationId)
    {
        $id = $classificationId;
        $classification = Classification::find($id);

        $classification->delete();

        return redirect()->route("classification")->with("success", "Data Berhasil Dihapus!");
    }
}
