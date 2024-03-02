<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::all();
        return view('content.nilai.index', compact('nilai'));
    }

    public function create()
    {
        return view('content.nilai.create');
    }

    public function edit(Request $request, $nilaiId)
    {
        $nilai = Nilai::find($nilaiId);
        return view('content.nilai.edit', compact('nilai'));
    }

    public function insert(Request $request)
    {
        Nilai::create([
            "nama" => $request->nama,
            "writing" => $request->writing,
            "reading" => $request->reading,
            "listening" => $request->listening,
            "rata_rata" => $request->rata_rata,
        ]);

        return redirect()->route("nilai")->with("success", "Data Berhasil Disimpan!");
    }
    public function update(Request $request, $nilaiId)
    {
        $nilai = Nilai::find($nilaiId);
        $nilai->update([
            "nama" => $request->nama,
            "writing" => $request->writing,
            "reading" => $request->reading,
            "listening" => $request->listening,
            "rata_rata" => $request->rata_rata,
        ]);

        return redirect()->route("nilai")->with("success", "Data Berhasil Diperbarui!");
    }

    public function destroy(Request $request, $nilaiId)
    {
        $id = $nilaiId;
        $nilai = Nilai::find($id);

        $nilai->delete();

        return redirect()->route("nilai")->with("success", "Data Berhasil Dihapus!");
    }
}
