<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        $quiz = Quiz::all();
        return view('content.quiz.index', compact('quiz'));
    }

    public function create()
    {
        return view('content.quiz.create');
    }

    public function edit(Request $request, $quizId)
    {
        $quiz = quiz::find($quizId);
        return view('content.quiz.edit', compact('quiz'));
    }

    public function insert(Request $request)
    {
        Quiz::create([
            "soal" => $request->soal,
            "jawaban" => $request->jawaban,
            "jawaban_benar" => $request->jawaban_benar,
        ]);

        return redirect()->route("quiz")->with("success", "Data Berhasil Disimpan!");
    }
    public function update(Request $request, $quizId)
    {
        $quiz = Quiz::find($quizId);
        $quiz->update([
            "soal" => $request->soal,
            "jawaban" => $request->jawaban,
            "jawaban_benar" => $request->jawaban_benar,
        ]);

        return redirect()->route("quiz")->with("success", "Data Berhasil Diperbarui!");
    }

    public function destroy(Request $request, $quizId)
    {
        $id = $quizId;
        $quiz = Quiz::find($id);

        $quiz->delete();

        return redirect()->route("quiz")->with("success", "Data Berhasil Dihapus!");
    }
}
