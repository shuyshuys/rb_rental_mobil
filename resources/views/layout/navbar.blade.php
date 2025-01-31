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
                <span class="text-white mr-4">Hello, {{ Auth::user()->name }}</span>
                {{-- <a href="{{ route('logout') }}" class="text-white"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a> --}}
                {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form> --}}
            @else
                <a href="{{ route('filament.auth.login') }}" class="text-white mr-4">Login</a>
                <a href="rental/register" class="text-white">Register</a>
            @endauth
        </div>
    </div>
</nav>