<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('modals.navbar')


    <!-- Section Layanan -->
    <section>
        <div class="relative h-screen bg-cover bg-center" style="background-image: url('images/teamBg.jpg');">
            <!-- Overlay for darkening the background image -->
            <div class="absolute inset-0 bg-black opacity-50"></div>

            <!-- Text overlay content -->
            <div class="relative z-10 flex flex-col justify-center items-center h-full text-center text-white">
                <!-- Title -->
                <h1 class="text-4xl font-bold">Tim kami</h1>

                <!-- Breadcrumb -->
                <div class="mt-2 text-xl font-semibold">
                    <a href="#" class="text-white">Home</a> /
                    <span class="text-[#4993EB]">Tim kami</span>
                </div>
            </div>
        </div>
        <!-- Overlay -->




        <div
            class="flex flex-col items-center justify-center md:flex-row py-10 bg-gradient-to-r from-[#1d75bd] to-[#125f97]">
            <!-- Left section with text -->
            <div class="w-full md:w-1/2 flex justify-center p-20">
                <div class="text-start flex flex-col gap-8">
                    <h2 class="text-2xl text-white font-semibold">Tim kami</h2>
                    <p class="text-xl text-white">
                        Kolaborad didirikan oleh para profesional yang memiliki<br> pengalaman bertahun-tahun dalam
                        dunia IT dan<br> manajemen. Kami bekerja sama untuk memberikan solusi<br> terbaik bagi
                        klien, dengan fokus pada inovasi, kolaborasi, dan hasil yang nyata.
                    </p>
                </div>
            </div>
            <!-- Right section with image -->
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="images/team.png" alt="Illustration" class="flex h-96 object-contain">
            </div>
        </div>

        <div class="flex flex-col max-w-7xl mx-auto px-4 py-12 gap-10">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-[#4993EB] uppercase tracking-wide">Tim Kami</h1>
                <p class="text-gray-600 mt-4 text-lg">Berkenalanlah dengan tim luar biasa yang bekerja di balik
                    layar</p>
            </div>

            <!-- Team Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                @foreach($data as $team)
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <img class="w-24 h-24 rounded-full mx-auto" src="{{ asset($team->image) }}" alt="Member 1">
                    <h2 class="text-2xl font-semibold mt-4 text-gray-800">{{ $team->name }}</h2>
                    <p class="text-gray-500 mt-2">{{ $team->jabatan }}</p>
                    <p class="mt-4 text-gray-600">{{ $team->description }}</p>
                </div>
                @endforeach
            </div>
            <div class="text-start">
                <h2 class="text-2xl text-[#4993EB] font-semibold tracking-wide uppercase">Filosofi kami</h2>
                <p class="mt-4 text-xl text-gray-500">
                    Setiap anggota tim Kolaborad adalah pelaku utama dalam memastikan keberhasilan setiap proyek.
                    Kami percaya bahwa kolaborasi lintas fungsi dan inovasi yang berkelanjutan adalah kunci untuk
                    menghadirkan solusi yang sesuai dengan kebutuhan klien dan menciptakan dampak yang nyata bagi
                    pertumbuhan bisnis mereka.
                </p>
            </div>
            <div class="w-full bg-gradient-to-r from-[#4993EB] to-[#3065BC] py-8 flex justify-center items-center mt-0">
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

</html>