<!-- resources/views/cars/index.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>{{ App\Models\Setting::where('slug','nama-toko')->get()->first()->description }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        window.onload = function() {
            alert("This page owned by Setsuna Cloud");
        };
    </script>
    <style>
        .carousel {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            position: relative;
        }

        .carousel img {
            scroll-snap-align: start;
            flex-shrink: 0;
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .carousel::-webkit-scrollbar {
            display: none;
        }

        .carousel-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 0.5rem;
            cursor: pointer;
            z-index: 10;
        }

        .carousel-button.left {
            left: 0;
        }

        .carousel-button.right {
            right: 0;
        }
    </style>
</head>

<body>
    @include('layout.navbar')
    <section class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('images/images.jpeg') }}">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto h-full flex items-end pb-10">
            <div class="text-white">
                <p class="text-lg"><a href="index.html" class="hover:underline">Beranda</a> <span class="mx-2">/</span> Homepage</p>
                <h1 class="text-4xl font-bold">Homepage</h1>
            </div>
        </div>
    </section>
    <div class="container mx-auto mt-8 mb-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($cars as $car)
                <div class="bg-white shadow-md rounded-lg overflow-hidden relative">
                    <div class="carousel">
                        @foreach ($car->carimages as $image)
                            <img src="{{ asset('storage/' . $image->image) }}" alt="Car Image">
                        @endforeach
                    </div>
                    <button class="carousel-button left" onclick="scrollCarousel(this, -1)">&#9664;</button>
                    <button class="carousel-button right" onclick="scrollCarousel(this, 1)">&#9654;</button>
                    <div class="p-4">
                        <h5 class="text-lg font-bold mb-2">{{ $car->manufacture->name }} {{ $car->name }}
                            {{ $car->color }}</h5>
                        <p class="text-gray-700 mb-2">Plat Nomor: {{ $car->license_number }}</p>
                        <p class="text-gray-700 mb-2">Tahun {{ $car->year }}</p>
                        <p class="text-gray-700 mb-2">Harga Sewa: Rp {{ number_format($car->price, 0, ',', '.') }}</p>
                        <p class="mb-4 {{ $car->status ? 'text-green-500' : 'text-red-500' }}">
                            Status {{ $car->status ? 'Tersedia' : 'Tidak Tersedia' }}
                        </p>
                        @if ($car->status)
                            <a href="{{ route('filament.resources.transactions.create', ['car_id' => $car->id]) }}"
                                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Sewa Sekarang</a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        function scrollCarousel(button, direction) {
            const carousel = button.parentElement.querySelector('.carousel');
            const scrollAmount = carousel.clientWidth;
            carousel.scrollBy({
                left: direction * scrollAmount,
                behavior: 'smooth'
            });
        }
    </script>
</body>

<!-- resources/views/cars/index.blade.php -->
<!-- ...existing code... -->

@include('layout.footer')

<!-- ...existing code... -->

</html>
