<!-- Navbar -->
<nav class="fixed top-0 left-0 w-full flex items-center justify-between p-6 px-28 bg-white/55 shadow-lg z-50">
    <!-- Logo Kolaborad -->
    <div class="flex items-center">
        <img src="images/Logo_kolaborad.png" alt="Kolaborad Logo" class="h-12 -z-10">
    </div>

    <!-- Menu Links (Desktop) -->
    <div class="hidden md:flex space-x-8">
        <a href="/" class="text-gray-700 hover:text-blue-600">Home</a>
        <a href="services" class="text-gray-700 hover:text-blue-600">Layanan</a>
        <a href="aboutUs" class="text-gray-700 hover:text-blue-600">Tentang Kami</a>
        <a href="team" class="text-gray-700 hover:text-blue-600">Tim Kami</a>
        <a href="client" class="text-gray-700 hover:text-blue-600">Klien</a>
        <a href="client" class="text-gray-700 hover:text-blue-600">Testimoni</a>
        <a href="blogs" class="text-gray-700 hover:text-blue-600">Blog</a>
    </div>

    <!-- Drawer Button (Mobile) -->
    <div class="md:hidden">
        <button id="drawer-toggle" class="text-gray-700 hover:text-blue-600 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- Kontak Button -->
    <div class="hidden md:block">
        <a href="contact"
            class="px-6 py-2 border-2 border-gray-700 text-gray-700 rounded-full hover:bg-gray-700 hover:text-white transition duration-300">
            Hubungi Kami
        </a>
    </div>
</nav>

<!-- Drawer (Mobile) -->
<div id="drawer" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
    <div class="w-64 bg-white h-full shadow-lg">
        <div class="flex items-center justify-between p-4">
            <img src="images/Logo_kolaborad.png" alt="Kolaborad Logo" class="h-12">
            <button id="drawer-close" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="flex flex-col p-4 space-y-4">
            <a href="/" class="text-gray-700 hover:text-blue-600">Home</a>
            <a href="services" class="text-gray-700 hover:text-blue-600">Layanan</a>
            <a href="aboutUs" class="text-gray-700 hover:text-blue-600">Tentang Kami</a>
            <a href="team" class="text-gray-700 hover:text-blue-600">Tim Kami</a>
            <a href="client" class="text-gray-700 hover:text-blue-600">Klien</a>
            <a href="client" class="text-gray-700 hover:text-blue-600">Testimoni</a>
            <a href="blogs" class="text-gray-700 hover:text-blue-600">Blog</a>
            <a href="contact"
                class="mt-4 px-6 py-2 border-2 border-gray-700 text-gray-700 rounded-full hover:bg-gray-700 hover:text-white transition duration-300">
                Hubungi Kami
            </a>
        </div>
    </div>
</div>

<!-- Script -->
<script>
    // Toggle Drawer
    const drawer = document.getElementById('drawer');
    const drawerToggle = document.getElementById('drawer-toggle');
    const drawerClose = document.getElementById('drawer-close');

    drawerToggle.addEventListener('click', () => {
        drawer.classList.remove('hidden');
    });

    drawerClose.addEventListener('click', () => {
        drawer.classList.add('hidden');
    });

    // Close drawer when clicking outside
    drawer.addEventListener('click', (event) => {
        if (event.target === drawer) {
            drawer.classList.add('hidden');
        }
    });
</script>

<!-- Tambahan margin untuk menghindari konten tertutup navbar -->
<div class="mt-24"></div>
