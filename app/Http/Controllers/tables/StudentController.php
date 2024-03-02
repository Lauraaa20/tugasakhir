<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class StudentController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('content.student.index', compact('siswa'));
    }

    public function create()
    {
        // $siswa = Siswa::all();
        return view('content.student.create');
    }

    public function edit(Request $request, $studentId)
    {
        $siswa = Siswa::find($studentId);
        return view('content.student.edit', compact('siswa'));
    }

    public function insert(Request $request)
    {
        Siswa::create([
            "nama" => $request->nama,
            "nik" => $request->nik,
            "alamat" => $request->alamat,
            "agama" => $request->agama,
            "nama_ortu" => $request->nama_ortu,
            "no_telp" => $request->no_telp,
            "kerja_ortu" => $request->kerja_ortu,
            "level" => $request->level,
        ]);

        return redirect()->route("student")->with("success", "Data Berhasil Disimpan!");
    }
    public function update(Request $request, $studentId)
    {
        $tutor = Siswa::find($studentId);
        $tutor->update([
            "nama" => $request->nama,
            "nik" => $request->nik,
            "alamat" => $request->alamat,
            "agama" => $request->agama,
            "nama_ortu" => $request->nama_ortu,
            "no_telp" => $request->no_telp,
            "kerja_ortu" => $request->kerja_ortu,
            "level" => $request->level,
        ]);

        return redirect()->route("student")->with("success", "Data Berhasil Diperbarui!");
    }

    public function destroy(Request $request, $studentId)
    {
        $id = $studentId;
        $siswa = Siswa::find($id);

        $siswa->delete();

        return redirect()->route("student")->with("success", "Data Berhasil Dihapus!");
    }
}
