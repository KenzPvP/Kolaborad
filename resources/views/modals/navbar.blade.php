<!-- Navbar Header (Desktop and Mobile) -->
<header id="nav" class="bg-transparent px-4 md:px-24 fixed w-full z-50 transition-all duration-300">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <!-- Logo (Desktop & Mobile) -->
        <div>
            <img id="navbar-logo" src="images/Logo_kolaborad.png" alt="Logo Kolaborad" class="h-12 transition-all duration-300 object-contain">
        </div>

        <!-- Navbar Links (Desktop only) -->
        <nav id="navbar-links" class="hidden md:flex gap-5 space-x-6">
            <a href="/#" class="text-white hover:text-blue-600 transition">Home</a>
            <a href="/aboutUs" class="text-white hover:text-blue-600 transition">Tentang Kami</a>
            <a href="/services" class="text-white hover:text-blue-600 transition">Layanan</a>
            <a href="/team" class="text-white hover:text-blue-600 transition">Tim Kami</a>
            <a href="/client" class="text-white hover:text-blue-600 transition">Klien</a>
            <a href="/client#testimonial" class="text-white hover:text-blue-600 transition">Testimonial</a>
            <a href="/blogs" class="text-white hover:text-blue-600 transition">Blogs</a>
        </nav>

        <!-- Contact Button (Desktop only) -->
        <div class="hidden md:block">
            <a href="/contact" id="contact-button" class="bg-transparent text-white px-4 py-2 rounded-full border border-white hover:bg-blue-700 hover:text-white transition">
                Hubungi Kami
            </a>
        </div>

        <!-- Mobile Menu Button (Mobile only) -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-black focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Drawer (Mobile only) -->
    <div id="drawer" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="w-64 bg-white h-full shadow-lg">
            <div class="flex items-center justify-between p-4">
                <img src="images/Logo_kolaborad.png" alt="Kolaborad Logo" class="h-12 object-contain">
                <button id="drawer-close" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Drawer Links -->
            <div class="flex flex-col p-4 space-y-4">
                <a href="/" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="/services" class="text-gray-700 hover:text-blue-600">Layanan</a>
                <a href="/aboutUs" class="text-gray-700 hover:text-blue-600">Tentang Kami</a>
                <a href="/team" class="text-gray-700 hover:text-blue-600">Tim Kami</a>
                <a href="/client" class="text-gray-700 hover:text-blue-600">Klien</a>
                <a href="/client#testimonial" class="text-gray-700 hover:text-blue-600">Testimoni</a>
                <a href="/blogs" class="text-gray-700 hover:text-blue-600">Blogs</a>
                <a href="/contact" class="mt-4 px-6 py-2 border-2 border-gray-700 text-gray-700 rounded-full hover:bg-gray-700 hover:text-white transition duration-300">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Scroll Effect for Desktop Only -->
<script>
    // Toggle mobile menu
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const drawer = document.getElementById('drawer');
    const drawerClose = document.getElementById('drawer-close');

    // Show drawer when menu button is clicked
    mobileMenuButton.addEventListener('click', () => {
        drawer.classList.toggle('hidden');
    });

    // Hide drawer when close button is clicked
    drawerClose.addEventListener('click', () => {
        drawer.classList.add('hidden');
    });

    // Scroll effect for desktop
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('nav');
        const logo = document.getElementById('navbar-logo');
        const navbarLinks = document.querySelectorAll('#navbar-links a');
        const contactButton = document.getElementById('contact-button');
        
        if (window.scrollY > 50) {
            navbar.classList.add('bg-white', 'shadow-md');
            navbar.classList.remove('bg-transparent');
            logo.classList.add('h-8');
            logo.classList.remove('h-12');

            // Change text to black for desktop links
            navbarLinks.forEach(link => {
                link.classList.add('text-black');
                link.classList.remove('text-white');
            });

            contactButton.classList.add('bg-white', 'text-black', 'border-black');
            contactButton.classList.remove('bg-transparent', 'text-white', 'border-white');
        } else {
            navbar.classList.remove('bg-white', 'shadow-md');
            navbar.classList.add('bg-transparent');
            logo.classList.add('h-12');
            logo.classList.remove('h-8');

            // Change text to white for desktop links
            navbarLinks.forEach(link => {
                link.classList.add('text-white');
                link.classList.remove('text-black');
            });

            contactButton.classList.add('bg-transparent', 'text-white', 'border-white');
            contactButton.classList.remove('bg-white', 'text-black', 'border-black');
        }
    });
</script>
