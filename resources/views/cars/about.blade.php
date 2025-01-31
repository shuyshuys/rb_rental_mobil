<!-- resources/views/cars/index.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>About - {{ App\Models\Setting::where('slug','nama-toko')->get()->first()->description }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        window.onload = function() {
            alert("This page owned by Setsuna Cloud");
        };
    </script>
</head>

<body>
    @include('layout.navbar')
    <!-- END nav -->
    
    <section class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('images/images.jpeg') }}">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto h-full flex items-end pb-10">
            <div class="text-white">
                <p class="text-lg"><a href="index.html" class="hover:underline">Beranda</a> <span class="mx-2">/</span> Tentang</p>
                <h1 class="text-4xl font-bold">Tentang</h1>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 bg-cover bg-center" style="background-image: url({{ asset('images/images.jpeg') }}"></div>
                <div class="w-full md:w-1/2 p-8">
                    <div class="text-gray-800">
                        <span class="text-lg font-semibold">Tentang</span>
                        <h2 class="text-3xl font-bold mb-4">Selamat datang di {{ App\Models\Setting::where('slug', 'nama-toko')->get()->first()->description }}</h2>
                        <p>{{ App\Models\Setting::where('slug', 'nama-toko')->get()->first()->description }} {{ App\Models\Setting::where('slug', 'description')->get()->first()->description }}</p><br><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

@include('layout.footer')