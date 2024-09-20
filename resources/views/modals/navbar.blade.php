<header class="bg-white bg-opacity-90 px-24 fixed w-full z-50 shadow-md">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <!-- Logo -->
        <div>
            <img src="images/Logo_kolaborad.png" alt="Logo Kolaborad" class="h-12">
        </div>

        <!-- Navbar Links (Desktop) -->
        <nav class="hidden md:flex gap-5 space-x-6">
            <a href="/#" class="text-gray-800 hover:text-blue-600">Home</a>
            <a href="/aboutUs" class="text-gray-800 hover:text-blue-600">Tentang Kami</a>
            <a href="/services" class="text-gray-800 hover:text-blue-600">Layanan</a>
            <a href="/team" class="text-gray-800 hover:text-blue-600">Tim Kami</a>
            <a href="/client" class="text-gray-800 hover:text-blue-600">Klien</a>
            <a href="/client#testimonial" class="text-gray-800 hover:text-blue-600">Testimonial</a>
            <a href="/blogs" class="text-gray-800 hover:text-blue-600">Blogs</a>
        </nav>

        <!-- Tombol Hubungi Kami (Desktop) -->
        <div class="hidden md:block">
            <a href="/contact" class="bg-white text-gray-600 px-4 py-2 rounded-full border border-black hover:bg-blue-700 hover:text-white transition">
                Hubungi Kami
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-gray-800 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
    </div>


    <!-- Drawer (Mobile) -->
    <div id="drawer" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="w-64 bg-white h-full shadow-lg">
            <div class="flex items-center justify-between p-4">
                <img src="images/Logo_kolaborad.png" alt="Kolaborad Logo" class="h-12">
                <button id="drawer-close" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="flex flex-col p-4 space-y-4">
                <a href="#" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Layanan</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Tentang Kami</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Tim Kami</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Klien</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Testimoni</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Blog</a>
                <a href="#"
                    class="mt-4 px-6 py-2 border-2 border-gray-700 text-gray-700 rounded-full hover:bg-gray-700 hover:text-white transition duration-300">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    // Toggle mobile menu
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('drawer');
        mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu
    document.getElementById('drawer-close').addEventListener('click', function() {
        const mobileMenu = document.getElementById('drawer');
        mobileMenu.classList.add('hidden'); // Menambahkan class hidden untuk menutup drawer
    });
</script>

