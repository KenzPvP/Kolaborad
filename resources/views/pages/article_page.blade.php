<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800">
    <!-- Navbar -->
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

    <div class="container mx-auto px-4 py-10">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Article Section -->
            <article class="w-full lg:w-2/3 bg-white p-10 lg:p-20 rounded-lg shadow-lg">
                <h2 class="text-4xl font-bold mb-6 text-[#4993EB]">Judul Artikel</h2>
                <p class="text-gray-600 mb-4">Penulis: <strong class="text-[#4993EB]">Nama Penulis</strong> | Tanggal: 13 September 2024</p>
                <img src="images/blogs.jpg" alt="Gambar Artikel" class="w-full h-auto rounded-lg mb-6">
                <p class="text-lg mb-4 text-gray-700 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis augue at velit convallis placerat.
                </p>
                <h3 class="text-2xl font-bold mb-3 text-[#4993EB]">Subjudul Artikel</h3>
                <p class="text-lg mb-4 text-gray-700 leading-relaxed">
                    Suspendisse potenti. Donec et velit lorem. Nam sagittis odio id massa pellentesque, nec lacinia lorem scelerisque.
                </p>
                <blockquote class="border-l-4 border-blue-500 pl-4 italic text-lg my-6">
                    "Artikel yang bagus membawa pembaca pada wawasan baru dan inspirasi baru."
                </blockquote>
                <p class="text-lg mb-4 text-gray-700 leading-relaxed">
                    Curabitur fringilla lorem eu bibendum malesuada. Cras vitae interdum libero.
                </p>
            </article>

            <!-- Sidebar -->
            <aside class="w-full lg:w-1/3 bg-gradient-to-r from-[#4993EB] to-[#3065BC] p-8 lg:p-10 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-6 text-white">Artikel Lainnya</h3>
                <div class="grid gap-6">
                    <!-- Card 1 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
                        <img src="images/blogs.jpg" alt="Artikel 1" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <h5 class="text-xl font-bold mb-3">Noteworthy technology acquisitions 2021</h5>
                            <p class="text-gray-700 mb-3">Here are the biggest enterprise technology acquisitions of 2021.</p>
                            <a href="#" class="text-blue-500 hover:text-blue-600 font-semibold">Read More</a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
                        <img src="images/blogs.jpg" alt="Artikel 2" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <h5 class="text-xl font-bold mb-3">Top 10 Web Development Trends in 2024</h5>
                            <p class="text-gray-700 mb-3">Exploring the latest web development trends.</p>
                            <a href="#" class="text-blue-500 hover:text-blue-600 font-semibold">Read More</a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    <!-- Footer -->
    @include('modals.footer')
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
</body>

</html>
