<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Quiz Result
        </h2>
    </x-slot>

    <div class="py-10 max-w-xl mx-auto text-center bg-white rounded shadow">
        <h1 class="text-3xl font-bold text-green-600">Your Score</h1>
        <p class="text-2xl mt-4">{{ $score }} / {{ $total }}</p>

        <a href="{{ route('quiz') }}" class="mt-6 inline-block text-blue-600 underline">
            Retake Quiz
        </a>
    </div>
</x-app-layout>
