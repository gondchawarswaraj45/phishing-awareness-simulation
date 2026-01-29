<x-app-layout>
    <x-slot name="header">
        <h2 class="section-title text-2xl">
            Dashboard
        </h2>
    </x-slot>

    <div class="dashboard-bg min-h-screen py-12 px-6 relative">


        <div class="max-w-6xl mx-auto space-y-14">

            <!-- Heading -->
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-cyan-400 mb-4">
                    🛡️ Phishing Awareness Simulation System
                </h1>
                <p class="text-muted max-w-2xl mx-auto">
                    A cybersecurity training platform to evaluate and improve
                    phishing attack awareness using real-world simulations.
                </p>
            </div>

            <!-- DASHBOARD GRID -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                <div class="dashboard-card p-8">
                    <p class="text-muted mb-2">User</p>
                    <p class="text-xl font-bold text-white">
                        {{ auth()->user()->name }}
                    </p>
                </div>

                <div class="dashboard-card p-8">
                    <p class="text-muted mb-2">Current Level</p>
                    <p class="text-xl font-bold text-yellow-400">
                        Beginner
                    </p>
                </div>

                <div class="dashboard-card p-8">
                    <p class="text-muted mb-2">Awareness Status</p>
                    <p class="text-xl font-bold text-green-400">
                        Active
                    </p>
                </div>

            </div>

            <!-- QUIZ SECTION (CLEARLY SEPARATED) -->
            <div class="quiz-panel p-12 text-center">

                <h2 class="text-3xl font-extrabold text-white mb-4">
                    🚨 Phishing Detection Quiz
                </h2>

                <p class="text-red-200 mb-10 max-w-xl mx-auto">
                    Attempt the quiz to test your ability to identify
                    phishing emails, malicious links, and social engineering attacks.
                </p>

                <a href="{{ route('quiz') }}"
                   class="quiz-btn inline-block px-12 py-4 rounded-full
                          text-lg font-extrabold text-white">
                    Start Quiz
                </a>

            </div>

        </div>
    </div>
</x-app-layout>
