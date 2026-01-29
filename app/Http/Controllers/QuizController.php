<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Result;

class QuizController extends Controller
{
    /**
     * Show quiz questions
     */
    public function index()
    {
        $questions = Quiz::all();
        return view('quiz.index', compact('questions'));
    }

    /**
     * Handle quiz submission
     */
    public function submit(Request $request)
    {
        $answers = $request->input('answers', []);
        $questions = Quiz::all();

        $score = 0;
        $total = $questions->count();

        foreach ($questions as $question) {
            if (
                isset($answers[$question->id]) &&
                $answers[$question->id] === $question->correct_option
            ) {
                $score++;
            }
        }

        // Calculate percentage
        $percentage = ($total > 0) ? ($score / $total) * 100 : 0;

        // Determine level
        if ($percentage >= 70) {
            $level = 'Advanced';
        } elseif ($percentage >= 40) {
            $level = 'Intermediate';
        } else {
            $level = 'Beginner';
        }

        // Save result to database
        Result::create([
            'user_id'    => auth()->id(),
            'score'      => $score,
            'total'      => $total,
            'percentage' => $percentage,
            'level'      => $level,
        ]);

        // Update user level (progression system)
        $user = auth()->user();
        $user->level = $level;
        $user->save();

        // Send data to result page
        return view('quiz.result', compact(
            'score',
            'total',
            'percentage',
            'level'
        ));
    }
}
