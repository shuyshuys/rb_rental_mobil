<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Contact - {{ App\Models\Setting::where('slug','nama-toko')->get()->first()->description }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        window.onload = function() {
            alert("This page owned by Setsuna Cloud");
        };
    </script>
</head>
<body class="bg-gray-100">

    @include('layout.navbar')

<section class="relative bg-cover bg-center h-screen" style="background-image: url({{ asset('images/images.jpeg') }}">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto h-full flex items-end pb-10">
        <div class="text-white">
            <p class="text-lg"><a href="index.html" class="hover:underline">Beranda</a> <span class="mx-2">/</span> Kontak</p>
            <h1 class="text-4xl font-bold">Kontak</h1>
        </div>
    </div>
</section>

<section class="py-20">
    <div class="container mx-auto">
        <div class="flex flex-wrap mb-12">
            <div class="w-full md:w-1/3 p-4">
                <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                    <div class="flex items-center mb-4">
                        <span class="icon-map-o text-2xl mr-4"></span>
                        <p>{{ App\Models\Setting::where('slug','alamat')->get()->first()->description }}</p>
                    </div>
                    <div class="flex items-center mb-4">
                        <span class="icon-mobile-phone text-2xl mr-4"></span>
                        <p><a href="tel://1234567920">{{ App\Models\Setting::where('slug','tlp')->get()->first()->description }}</a></p>
                    </div>
                    <div class="flex items-center">
                        <span class="icon-envelope-o text-2xl mr-4"></span>
                        <p><a href="mailto:info@yoursite.com">{{ App\Models\Setting::where('slug','email')->get()->first()->description }}</a></p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-2/3 p-4">
                <form action="#" class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-4">
                        <input type="text" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Your Name">
                    </div>
                    <div class="mb-4">
                        <input type="text" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Your Email">
                    </div>
                    <div class="mb-4">
                        <input type="text" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Subject">
                    </div>
                    <div class="mb-4">
                        <textarea class="w-full p-3 border border-gray-300 rounded-lg" cols="30" rows="7" placeholder="Message"></textarea>
                    </div>
                    <div>
                        <input type="submit" value="Send Message" class="bg-blue-500 text-white py-3 px-5 rounded-lg hover:bg-blue-600">
                    </div>
                </form>
            </div>
        </div>
        {!! App\Models\Setting::where('slug','maps')->get()->first()->description !!}
    </div>
</section>

@include('layout.footer')

<script src="{{ asset('depan') }}/js/jquery.min.js"></script>
<script src="{{ asset('depan') }}/js/jquery.migrate-3.0.1.min.js"></script>
<script src="{{ asset('depan') }}/js/popper.min.js"></script>
<script src="{{ asset('depan') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('depan') }}/js/jquery.easing.1.3.js"></script>
<script src="{{ asset('depan') }}/js/jquery.waypoints.min.js"></script>
<script src="{{ asset('depan') }}/js/jquery.stellar.min.js"></script>
<script src="{{ asset('depan') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('depan') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('depan') }}/js/aos.js"></script>
<script src="{{ asset('depan') }}/js/jquery.animateNumber.min.js"></script>
<script src="{{ asset('depan') }}/js/bootstrap-datepicker.js"></script>
<script src="{{ asset('depan') }}/js/jquery.timepicker.min.js"></script>
<script src="{{ asset('depan') }}/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('depan') }}/js/google-map.js"></script>
<script src="{{ asset('depan') }}/js/main.js"></script>

</body>
</html>