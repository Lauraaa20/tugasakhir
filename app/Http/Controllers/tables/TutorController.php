<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tutor;

class TutorController extends Controller
{
    public function index()
    {
        $tutor = Tutor::all();
        return view('content.tutor.index', compact('tutor'));
    }

    public function create()
    {
        return view('content.tutor.create');
    }

    public function edit(Request $request, $tutorId)
    {
        $tutor = Tutor::find($tutorId);
        return view('content.tutor.edit', compact('tutor'));
    }

    public function insert(Request $request)
    {
        $imageName = $request->nama . ".jpg";
        $request->file("foto")->move(public_path("images/tutor"), $imageName);

        Tutor::create([
            "nama" => $request->nama,
            "nik" => $request->nik,
            "alamat" => $request->alamat,
            "foto" => $imageName,
        ]);

        return redirect()->route("tutor")->with("success", "Data Berhasil Disimpan!");

    }
    public function update(Request $request, $tutorId)
    {
        $imageName = $request->nama . ".jpg";
        $request->file("foto")->move(public_path("images/tutor"), $imageName);

        $tutor = Tutor::find($tutorId);
        $tutor->update([
            "nama" => $request->nama,
            "nik" => $request->nik,
            "alamat" => $request->alamat,
            "foto" => $imageName,
        ]);

        return redirect()->route("tutor")->with("success", "Data Berhasil Diperbarui!");
    }

    public function destroy(Request $request, $tutorId)
    {
        $id = $tutorId;
        $tutor = Tutor::find($id);

        $tutor->delete();
        try {
            unlink(public_path("images/tutor/") . $tutor->foto);
        } catch (\Exception $e) {

        }

        return redirect()->route("tutor")->with("success", "Data Berhasil Dihapus!");
    }
}
