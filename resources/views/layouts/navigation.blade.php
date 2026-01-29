<nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">

        <div class="flex space-x-6">
            <a href="{{ route('dashboard') }}" class="font-semibold text-gray-800">
                Dashboard
            </a>

            <a href="{{ route('quiz') }}" class="font-semibold text-gray-800">
                Quiz
            </a>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-red-600 font-semibold">
                Logout
            </button>
        </form>

    </div>
</nav>
