<footer class="bg-gray-800 text-gray-200 py-10">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <div>
                <h2 class="text-2xl font-bold mb-4">
                    <a href="#" class="logo"></a>
                    <span>{{ App\Models\Setting::where('slug','nama-toko')->get()->first()->description }}</span>
                </h2>
                <p>{{ App\Models\Setting::where('name','Banner')->get()->first()->description }}</p>
                <ul class="flex space-x-4 mt-5">
                    <li><a target="_blank" href="https://twitter.com" class="hover:text-blue-400"><span class="icon-twitter"></span></a></li>
                    <li><a target="_blank" href="https://facebook.com" class="hover:text-blue-600"><span class="icon-facebook"></span></a></li>
                    <li><a target="_blank" href="https://instagram.com" class="hover:text-pink-500"><span class="icon-instagram"></span></a></li>
                </ul>
            </div>
            <div>
                <h2 class="text-xl font-bold mb-4">Informasi</h2>
                <ul>
                    <li><a href="#" class="py-2 block hover:text-gray-400">About</a></li>
                </ul>
            </div>
            <div>
                <h2 class="text-xl font-bold mb-4">Dukungan Pelanggan</h2>
                <ul>
                    <li><a href="#" class="py-2 block hover:text-gray-400">Contact Us</a></li>
                </ul>
            </div>
            <div>
                <h2 class="text-xl font-bold mb-4">Punya Pertanyaan?</h2>
                <ul>
                    <li class="flex items-center"><span class="icon icon-map-marker mr-2"></span><span>Kartiasa, Kec. Sambas, Sambas</span></li>
                    <li class="flex items-center mt-2"><a href="#"><span class="icon icon-phone mr-2"></span><span>089694527599</span></a></li>
                    <li class="flex items-center mt-2"><a href="#"><span class="icon icon-envelope mr-2"></span><span>yusril.riandi16@gmail.com</span></a></li>
                </ul>
            </div>
        </div>
        <div class="text-center">
            <p>&copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</p>
        </div>
    </div>
</footer>