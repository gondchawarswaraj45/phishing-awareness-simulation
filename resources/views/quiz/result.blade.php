<x-app-layout>
    <!-- Full background wrapper -->
   <div
        class="min-h-screen w-full flex items-center justify-center px-6"
        style="
            background-image: url('{{ asset('images/quiz/result-bg.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        "
    >

        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-black/50"></div>

        <!-- Result Card -->
        <div class="relative z-10 max-w-xl w-full mx-6
                    bg-black/80 backdrop-blur-md
                    rounded-3xl shadow-2xl
                    p-12 text-center">

            <!-- Title -->
            <h1 class="text-4xl font-extrabold text-cyan-400 mb-6">
                🎯 Quiz Result
            </h1>

            <!-- SCORE (BIG & DARK) -->
            <div class="mb-6">
                <p class="text-3xl font-extrabold text-black">
                    {{ $score }}
                    <span class="text-gray-400 text-3xl">/ {{ $total }}</span>
                </p>
            </div>

            <!-- Message -->
            <p class="text-xl font-semibold mb-8
               {{ ($score / $total) >= 0.6 ? 'text-green-400' : 'text-red-400' }}">
                {{ ($score / $total) >= 0.6
                    ? 'Excellent! You can identify phishing attempts confidently.'
                    : 'You need more awareness. Practice again and stay alert.' }}
            </p>

            <!-- Actions -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('quiz') }}"
                   class="px-8 py-3 rounded-full
                          bg-yellow-400 hover:bg-yellow-500
                          text-black font-bold transition">
                    Retry Quiz
                </a>

                <a href="{{ route('dashboard') }}"
                   class="px-8 py-3 rounded-full
                          bg-cyan-500 hover:bg-cyan-600
                          text-black font-bold transition">
                    Dashboard
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
