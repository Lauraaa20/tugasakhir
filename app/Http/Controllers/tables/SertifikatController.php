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

    public function edit(Request $request, $sertifikatId)
    {
        $sertifikat = Sertifikat::find($sertifikatId);
        return view('content.sertifikat.edit', compact('sertifikat'));
    }

    public function insert(Request $request)
    {
        $fileName = $request->nama . ".pdf";
        $request->file("sertifikat")->move(public_path("file/sertifikat"), $fileName);

        Sertifikat::create([
            "nama" => $request->nama,
            "sertifikat" => $fileName,
        ]);

        return redirect()->route("sertifikat")->with("success", "Data Berhasil Disimpan!");
    }
    public function update(Request $request, $sertifikatId)
    {
        $fileName = $request->nama . ".pdf";
        $post = Sertifikat::find($sertifikatId);
        $post->fill($request->input())->save();

        $sertifikat = Sertifikat::find($sertifikatId);
        $sertifikat->update([
            "nama" => $request->nama,
            "foto" => $fileName,
        ]);

        return redirect()->route("sertifikat")->with("success", "Data Berhasil Diperbarui!");
    }

    public function destroy(Request $request, $sertifikatId)
    {
        $id = $sertifikatId;
        $sertifikat = Sertifikat::find($id);

        $sertifikat->delete();
        try {
            unlink(public_path("file/sertifikat/") . $sertifikat->file);
        } catch (\Exception $e) {
        }

        return redirect()->route("sertifikat")->with("success", "Data Berhasil Dihapus!");
    }
}
