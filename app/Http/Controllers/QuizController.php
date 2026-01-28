<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        $questions = Quiz::all();
        return view('quiz', compact('questions'));
    }

    public function submit(Request $request)
    {
        $questions = Quiz::all();
        $score = 0;

        foreach ($questions as $question) {
            $answer = $request->input('question_'.$question->id);
            if ($answer === $question->correct_option) {
                $score++;
            }
        }

        return view('result', [
            'score' => $score,
            'total' => $questions->count()
        ]);
    }
}
