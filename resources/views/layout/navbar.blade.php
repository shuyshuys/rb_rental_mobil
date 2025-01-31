<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ url('/') }}" class="text-white text-lg font-bold">Perentalan Mobil</a>
        <div>
            <a href="{{ url('/') }}" class="text-white mr-2
                {{ request()->is('/') ? 'underline' : '' }}">Home</a>
            <a href="{{ url('rental') }}" class="text-white mr-2
                {{ request()->is('rental') ? 'underline' : '' }}">Rental</a>
            <a href="{{ url('about') }}" class="text-white mr-2
                {{ request()->is('about') ? 'underline' : '' }}">About</a>
                 {{-- kontak --}}
            <a href="{{ url('contact') }}" class="text-white mr-2
                {{ request()->is('contact') ? 'underline' : '' }}">Contact</a>
        </div>
        <div>
            @auth
            <div class="relative">
                <button class="text-white focus:outline-none" id="user-menu-button">
                    Hello, {{ Auth::user()->name }}
                </button>
                <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 hidden z-50" id="user-menu">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">Logout</button>
                    </form>
                </div>
            </div>
            <script>
                document.getElementById('user-menu-button').addEventListener('click', function() {
                    document.getElementById('user-menu').classList.toggle('hidden');
                });
            </script>
            @else
                <a href="{{ route('filament.auth.login') }}" class="text-white mr-4">Login</a>
                <a href="rental/register" class="text-white">Register</a>
            @endauth
        </div>
    </div>
</nav>