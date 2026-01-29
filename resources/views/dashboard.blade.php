<x-app-layout>
    <div class="min-h-screen w-full px-6 py-16"
         style="
            background-image: url('{{ asset('images/dashboard-bg.webp') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
         ">

        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative z-10 max-w-6xl mx-auto space-y-12 text-white">

            <h1 class="text-4xl font-extrabold text-cyan-400 text-center">
                🛡️ Phishing Awareness Dashboard
            </h1>

            <!-- STATS -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="bg-black/80 p-8 rounded-2xl text-center">
                    <p class="text-gray-400">Total Attempts</p>
                    <p class="text-4xl font-bold text-white">
                        {{ $totalAttempts }}
                    </p>
                </div>

                <div class="bg-black/80 p-8 rounded-2xl text-center">
                    <p class="text-gray-400">Last Score</p>
                    <p class="text-4xl font-bold text-yellow-400">
                        {{ $lastResult?->percentage ?? 0 }}%
                    </p>
                </div>

                <div class="bg-black/80 p-8 rounded-2xl text-center">
                    <p class="text-gray-400">Highest Score</p>
                    <p class="text-4xl font-bold text-green-400">
                        {{ $highestScore ?? 0 }}%
                    </p>
                </div>

            </div>

            <!-- ACTION -->
            <div class="text-center pt-10">
                <a href="{{ route('quiz') }}"
                   class="px-14 py-4 rounded-full bg-red-600 hover:bg-red-700
                          text-white text-lg font-bold transition">
                    🚀 Start New Quiz
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
