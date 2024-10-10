<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service - Marketing Strategy</title>
    @vite('resources/css/app.css')
</head>
<body id="service" class="font-sans leading-normal tracking-normal">
    @include('modals.navbar')

    <!-- Hero Section -->
    <section class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/operator.jpg') }}');">
        <!-- Overlay for dimming the background -->
        <div class="absolute inset-0 bg-gradient-to-r from-black to-transparent opacity-70"></div>

        <!-- Hero Content -->
        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center text-white">
            <h1 class="text-4xl font-bold">Marketing Strategy</h1>
            <!-- Breadcrumb Navigation -->
            <div class="mt-4 text-lg font-medium tracking-wider animate-fade-in-up">
                <a href="{{ url('/') }}" class="text-white hover:underline">Home</a> /
                <span class="text-blue-400">Marketing Strategy</span>
            </div>
        </div>
    </section>

    <!-- Service Details Section -->
    <section class="w-full bg-white py-16 px-8">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800">Kenapa Strategi Pemasaran Penting?</h2>
            <p class="text-lg text-gray-600 mt-6">
                Dalam dunia bisnis yang semakin kompetitif, strategi pemasaran yang tepat dapat memberikan keunggulan yang signifikan. Kami membantu Anda merumuskan dan menjalankan strategi pemasaran yang dirancang untuk meningkatkan brand visibility, menarik audiens yang tepat, dan mencapai hasil bisnis yang optimal.
            </p>
        </div>

        <!-- Features Section -->
        <div class="flex flex-col md:flex-row mt-12 space-y-8 md:space-y-0 md:space-x-8 max-w-6xl mx-auto">
            <!-- Feature 1 -->
            <div class="flex-1 bg-blue-50 p-8 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <h3 class="text-2xl font-semibold text-blue-600">Riset Pasar & Analisis Kompetitor</h3>
                <p class="mt-4 text-gray-600">
                    Kami membantu Anda memahami dinamika pasar dan pesaing untuk membuat keputusan yang lebih cerdas dan terinformasi.
                </p>
            </div>
            <!-- Feature 2 -->
            <div class="flex-1 bg-blue-50 p-8 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <h3 class="text-2xl font-semibold text-blue-600">Perencanaan Strategi Pemasaran</h3>
                <p class="mt-4 text-gray-600">
                    Penyusunan rencana pemasaran yang disesuaikan dengan tujuan bisnis Anda, dengan fokus pada hasil yang terukur dan efektif.
                </p>
            </div>
            <!-- Feature 3 -->
            <div class="flex-1 bg-blue-50 p-8 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <h3 class="text-2xl font-semibold text-blue-600">Manajemen Kampanye Digital</h3>
                <p class="mt-4 text-gray-600">
                    Kami mengelola kampanye pemasaran digital Anda secara menyeluruh, dari perencanaan hingga evaluasi hasil.
                </p>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-16">
            <a href="{{ url('/contact') }}" class="bg-blue-500 text-white px-8 py-4 rounded-md text-lg font-semibold shadow-lg hover:bg-blue-600 transition transform hover:-translate-y-1">
                Hubungi Kami Sekarang
            </a>
        </div>
    </section>
    @include('modals.footer')
</body>
</html>