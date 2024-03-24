<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->role != "Admin") {
            $jadwal = Jadwal::where("user_id", $user->id)->get();
        } else {
            $jadwal = Jadwal::all();
        }
        return view('content.jadwal.index', compact('jadwal'));
    }

    public function create()
    {
        return view('content.jadwal.create');
    }

    public function edit(Request $request, $jadwalId)
    {
        $jadwal = Jadwal::find($jadwalId);
        return view('content.jadwal.edit', compact('jadwal'));
    }

    public function insert(Request $request)
    {
        Jadwal::create([
            "tutor" => $request->tutor,
            "mapel" => $request->mapel,
            "kelas" => $request->kelas,
            "jam" => $request->jam,
        ]);

        return redirect()->route("jadwal")->with("success", "Data Berhasil Disimpan!");
    }
    public function update(Request $request, $jadwalId)
    {
        $jadwal = Jadwal::find($jadwalId);
        $jadwal->update([
            "tutor" => $request->tutor,
            "mapel" => $request->mapel,
            "kelas" => $request->kelas,
            "jam" => $request->jam,
        ]);

        return redirect()->route("jadwal")->with("success", "Data Berhasil Diperbarui!");
    }

    public function destroy(Request $request, $jadwalId)
    {
        $id = $jadwalId;
        $jadwal = Jadwal::find($id);

        $jadwal->delete();

        return redirect()->route("jadwal")->with("success", "Data Berhasil Dihapus!");
    }
}
