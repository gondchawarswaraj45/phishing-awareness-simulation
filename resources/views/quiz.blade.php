<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Phishing Awareness Quiz
        </h2>
    </x-slot>

    <div class="py-8 max-w-4xl mx-auto">
        <form method="POST" action="{{ route('quiz.submit') }}">
            @csrf

            @foreach($questions as $q)
                <div class="mb-6 p-4 bg-white rounded shadow">
                    <p class="font-semibold mb-2">{{ $q->question }}</p>

                    @foreach(['A','B','C','D'] as $opt)
                        <label class="block">
                            <input type="radio" name="question_{{ $q->id }}" value="{{ $opt }}" required>
                            {{ $q->{'option_'.strtolower($opt)} }}
                        </label>
                    @endforeach
                </div>
            @endforeach

            <button class="px-4 py-2 bg-blue-600 text-white rounded">
                Submit Quiz
            </button>
        </form>
    </div>
</x-app-layout>
