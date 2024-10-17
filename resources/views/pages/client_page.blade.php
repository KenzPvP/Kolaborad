<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('modals.navbar')


    <!-- Section Layanan -->
    <section>
        <div class="relative h-screen bg-cover bg-center" style="background-image: url('images/consultant.jpg');">
            <!-- Overlay for darkening the background image -->
            <div class="absolute inset-0 bg-black opacity-50"></div>

            <!-- Text overlay content -->
            <div class="relative z-10 flex flex-col justify-center items-center h-full text-center text-white">
                <!-- Title -->
                <h1 class="text-4xl font-bold">Klien kami</h1>

                <!-- Breadcrumb -->
                <div class="mt-2 text-xl font-semibold">
                    <a href="#" class="text-white">Home</a> /
                    <span class="text-[#4993EB]">Klien kami</span>
                </div>
            </div>
        </div>
        <!-- Overlay -->




        <!-- Client Section -->
        <section class="py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-[#4993EB] text-center mb-10">Kolaborasi Klien</h2>

                <!-- Infinite scrolling container -->
                <div class="scroll-container overflow-hidden relative">
                    <div class="scroll-content flex space-x-8">
                        <!-- Gambar Klien -->
                        <img src="images/Logo_kolaborad.png" class="h-56">
                        <img src="images/Logo_kolaborad.png" class="h-56">
                        <img src="images/Logo_kolaborad.png" class="h-56">
                        <img src="images/Logo_kolaborad.png" class="h-56">
                        <img src="images/Logo_kolaborad.png" class="h-56">
                        <img src="images/Logo_kolaborad.png" class="h-56">
                        <!-- Duplikasi gambar untuk membuat scrolling mulus -->
                        <img src="images/Logo_kolaborad.png" class="h-56">
                        <img src="images/Logo_kolaborad.png" class="h-56">
                        <img src="images/Logo_kolaborad.png" class="h-56">
                        <img src="images/Logo_kolaborad.png" class="h-56">
                        <img src="images/Logo_kolaborad.png" class="h-56">
                        <img src="images/Logo_kolaborad.png" class="h-56">
                    </div>
                </div>

                <p class="text-center text-gray-600 mt-10">And Many More</p>
            </div>
        </section>


        <div class="flex flex-col max-w-7xl mx-auto px-4 py-12 gap-10">
            <div class="flex flex-col gap-10">
                <hr class="h-px my-8 border-0 bg-blue-400">
                <!-- Header Section -->
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-bold text-[#4993EB] uppercase tracking-wide">Studi kasus</h1>
                    <p class="text-gray-600 mt-4 text-lg">Studi kasus dari Klien bahagia yang pernah kerjasama dengan
                        kami</p>
                </div>

                <!-- Team Section -->
                @foreach($studi as $studi)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                        <img class="w-24 h-24 rounded-full mx-auto" src="{{ asset($studi->image) }}"
                            alt="Member 1">
                        <h2 class="text-2xl font-semibold mt-4 text-gray-800">{{ $studi->name }}</h2>
                        <p class="text-gray-500 mt-2">{{ $studi->company }}</p>
                        <p class="mt-4 text-gray-600">{{ $studi->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div id="testimonial" class="flex flex-col gap-10">
                <hr class="h-px my-8 border-0 bg-blue-400">
                <!-- Header Section -->
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-bold text-[#4993EB] uppercase tracking-wide">Testimoni</h1>
                    <p class="text-gray-600 mt-4 text-lg">Testimoni tentang kerjasama kami dari Klien</p>
                </div>

                <!-- Team Section -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($testimoni as $testimoni)
                    <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                        <img class="w-24 h-24 rounded-full mx-auto" src="{{ asset($testimoni->image) }}"
                            alt="Member 1">
                        <h2 class="text-2xl font-semibold mt-4 text-gray-800">{{ $testimoni->name }}</h2>
                        <p class="text-gray-500 mt-2">{{ $testimoni->company }}</p>
                        <p class="mt-4 text-gray-600">{{$testimoni->description}}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <div
                class="w-full bg-gradient-to-r from-[#4993EB] to-[#3065BC] py-8 flex justify-center items-center mt-0">
                <div class="flex flex-row items-center space-x-4 gap-16">
                    <span class="text-white text-lg md:text-xl font-semibold">Hubungi Kami Sekarang</span>
                    <a href="contact"
                        class="bg-white text-black py-2 px-4 rounded-lg font-semibold text-sm md:text-base shadow-md hover:bg-gray-100 transition">
                        Hubungi
                    </a>
                </div>
            </div>
        </div>


    </section>
    @include('modals.footer')






</body>

<style>
    /* Container styling */
    .scroll-container {
        width: 100%;
    }

    /* Content containing the images */
    .scroll-content {
        display: flex;
        width: max-content;
        animation: scroll 30s linear infinite;
    }

    /* Animation for infinite scrolling without gaps */
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }
</style>

</html>