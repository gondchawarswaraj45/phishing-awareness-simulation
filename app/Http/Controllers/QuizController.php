<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        $questions = Quiz::all();
        return view('quiz.index', compact('questions'));
    }

   public function submit(Request $request)
{
    $score = 0;
    $total = Quiz::count();

    foreach ($request->answers ?? [] as $questionId => $answer) {
        $question = Quiz::find($questionId);
        if ($question && $question->correct_option === $answer) {
            $score++;
        }
    }

    return view('quiz.result', compact('score', 'total'));
}

}
