<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        Quiz::create([
            'question' => 'What is phishing?',
            'option_a' => 'A hacking technique',
            'option_b' => 'A social engineering attack',
            'option_c' => 'A programming language',
            'option_d' => 'A firewall',
            'correct_option' => 'B',
        ]);

        Quiz::create([
            'question' => 'Which is a sign of phishing email?',
            'option_a' => 'Unknown sender',
            'option_b' => 'Urgent message',
            'option_c' => 'Suspicious link',
            'option_d' => 'All of the above',
            'correct_option' => 'D',
        ]);

        Quiz::create([
            'question' => 'What should you do if you receive a phishing email?',
            'option_a' => 'Click the link',
            'option_b' => 'Reply immediately',
            'option_c' => 'Report and delete it',
            'option_d' => 'Forward to friends',
            'correct_option' => 'C',
        ]);

        Quiz::create([
            'question' => 'Which link is most dangerous?',
            'option_a' => 'https://bank.com',
            'option_b' => 'https://secure-bank-login.xyz',
            'option_c' => 'https://google.com',
            'option_d' => 'https://gov.in',
            'correct_option' => 'B',
            ]);

        Quiz::create([
            'question' => 'Phishing attacks usually try to steal?',
            'option_a' => 'Passwords',
            'option_b' => 'OTP',
            'option_c' => 'Credit card details',
            'option_d' => 'All of the above',
            'correct_option' => 'D',
            ]);



    }
}
