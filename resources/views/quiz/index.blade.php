<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-white">
            🧠 Phishing Detection Quiz
        </h2>
    </x-slot>

    <!-- FULL PAGE BACKGROUND -->
    <div class="min-h-screen w-full"
     style="
        background-image: url('{{ asset('images/quiz/quiz-bg.avif') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
     ">


        <!-- DARK OVERLAY -->
        <div class="min-h-screen bg-black/70 py-14 px-6">

            <form method="POST"
                  action="{{ route('quiz.submit') }}"
                  class="max-w-4xl mx-auto space-y-10">

                @csrf

                @foreach ($questions as $index => $q)
                    <div class="bg-slate-900/90 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-slate-700">
                        <h3 class="text-xl font-semibold text-cyan-300 mb-6">
                            Q{{ $index + 1 }}. {{ $q->question }}
                        </h3>

                        @foreach (['a','b','c','d'] as $opt)
                            <label class="flex items-center mb-4 cursor-pointer">
                                <input type="radio"
                                       name="answers[{{ $q->id }}]"
                                       value="{{ strtoupper($opt) }}"
                                       class="mr-3 accent-cyan-400">
                                <span class="text-gray-200">
                                    {{ $q->{'option_'.$opt} }}
                                </span>
                            </label>
                        @endforeach
                    </div>
                @endforeach

                <!-- SUBMIT BUTTON -->
                <div class="text-center pt-6">
                    <button type="submit"
                            class="px-14 py-4 rounded-full
                                   bg-red-600 hover:bg-red-700
                                   text-white font-extrabold text-lg
                                   shadow-lg transition">
                        🚀 Submit Quiz
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
