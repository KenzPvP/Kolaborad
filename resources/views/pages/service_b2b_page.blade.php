
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sales B2B & B2C Development</title>
    @vite ('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    @include('modals.navbar')

    <!-- Hero Section -->
    <section class="relative h-screen bg-cover bg-center"
        style="background-image: url('{{ asset('images/operator.jpg') }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black to-transparent opacity-70"></div>

        <!-- Hero Content -->
        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center text-white">
            <h1 class="text-4xl font-bold">Sales B2B & B2C Development</h1>
            <!-- Breadcrumb Navigation -->
            <div class="mt-4 text-lg font-medium tracking-wider animate-fade-in-up">
                <a href="{{ url('/') }}" class="text-white hover:underline">Home</a> /
                <span class="text-blue-400">Sales B2B & B2C Development</span>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-6 text-gray-800">Mengapa Kolaborad?</h2>
            <p class="text-lg text-gray-600 mb-12 max-w-3xl mx-auto">
                Di Kolaborad, kami memahami bahwa penjualan memerlukan strategi yang unik untuk setiap segmen pasar.
                Kami memberikan solusi yang disesuaikan untuk kedua pendekatan Business-to-Business (B2B) dan
                Business-to-Consumer (B2C).
            </p>
        </div>
    </section>

    <!-- Our Approach Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-semibold mb-10 text-gray-800 text-center">Pendekatan Kami</h2>
            <div class="flex flex-col md:flex-row mt-12 space-y-8 md:space-y-0 md:space-x-8 max-w-6xl mx-auto">
                <!-- Feature 1 -->
                <div class="flex-1 bg-blue-50 p-8 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <h3 class="text-2xl font-semibold text-blue-600">Riset dan Analisis Pasar</h3>
                    <p class="mt-4 text-gray-600">
                        Dengan analisis mendalam terhadap tren pasar dan kompetitor,
                        kami mengidentifikasi peluang penjualan yang memberikan
                        dampak langsung bagi pertumbuhan bisnis Anda.

                    </p>
                </div>
                <!-- Feature 2 -->
                <div class="flex-1 bg-blue-50 p-8 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <h3 class="text-2xl font-semibold text-blue-600">Strategi B2B yang Efisien</h3>
                    <p class="mt-4 text-gray-600">
                        Kami memfokuskan pendekatan B2B pada pembangunan hubungan jangka panjang yang berkelanjutan,
                        memberikan solusi yang relevan bagi mitra bisnis Anda.
                    </p>
                </div>
                <!-- Feature 3 -->
                <div class="flex-1 bg-blue-50 p-8 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <h3 class="text-2xl font-semibold text-blue-600">Pendekatan Inovatif B2C</h3>
                    <p class="mt-4 text-gray-600">
                        Melalui pendekatan berbasis pengalaman pelanggan, kami merancang strategi penjualan B2C yang
                        memanfaatkan digitalisasi dan data-driven untuk mendorong loyalitas konsumen.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-gray-800 mb-2 text-center">Keuntungan yang Anda Dapatkan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Benefit 1 -->
                <div class="bg-gray-50 shadow-xl p-8 rounded-lg transition-transform transform hover:scale-105">
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Peningkatan Penjualan</h3>
                    <p class="text-gray-600 mb-4">
                        Kami membantu Anda meraih target penjualan dengan solusi strategis yang fokus pada peningkatan
                        jumlah prospek dan konversi penjualan.
                    </p>
                </div>
                <!-- Benefit 2 -->
                <div class="bg-gray-50 shadow-xl p-8 rounded-lg transition-transform transform hover:scale-105">
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Solusi Disesuaikan</h3>
                    <p class="text-gray-600 mb-4">
                        Setiap bisnis memiliki karakteristik yang unik. Kami menyesuaikan solusi berdasarkan kebutuhan
                        bisnis Anda untuk memastikan hasil yang maksimal.
                    </p>
                </div>
                <!-- Benefit 3 -->
                <div class="bg-gray-50 shadow-xl p-8 rounded-lg transition-transform transform hover:scale-105">
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Laporan Real-Time</h3>
                    <p class="text-gray-600 mb-4">
                        Dengan akses ke data penjualan real-time, Anda dapat mengukur keberhasilan strategi dan
                        melakukan penyesuaian untuk hasil yang lebih baik.
                    </p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-16">
            <a href="{{ url('/contact') }}"
                class="bg-blue-500 text-white px-8 py-4 rounded-md text-lg font-semibold shadow-lg hover:bg-blue-600 transition transform hover:-translate-y-1">
                Hubungi Kami Sekarang
            </a>
        </div>
    </section>



    <!-- Footer -->
    @include('modals.footer')

</body>

</html>
