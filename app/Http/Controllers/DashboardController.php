<?php

namespace App\Http\Controllers;

use App\Models\Result;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        $totalAttempts = Result::where('user_id', $userId)->count();

        $lastResult = Result::where('user_id', $userId)
                            ->latest()
                            ->first();

        $highestScore = Result::where('user_id', $userId)->max('percentage');

        return view('dashboard', [
            'totalAttempts' => $totalAttempts,
            'lastResult' => $lastResult,
            'highestScore' => $highestScore,
        ]);
    }
}
