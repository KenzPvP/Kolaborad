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
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <img class="w-24 h-24 rounded-full mx-auto" src="https://via.placeholder.com/150" alt="Member 1">
                    <h2 class="text-2xl font-semibold mt-4 text-gray-800">John Doe</h2>
                    <p class="text-gray-500 mt-2">CEO & Founder</p>
                    <p class="mt-4 text-gray-600">John adalah pendiri Kolaborad, dengan visi untuk menciptakan
                        solusi inovatif bagi bisnis di era digital.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <img class="w-24 h-24 rounded-full mx-auto" src="https://via.placeholder.com/150" alt="Member 2">
                    <h2 class="text-2xl font-semibold mt-4 text-gray-800">Jane Smith</h2>
                    <p class="text-gray-500 mt-2">Chief Technology Officer</p>
                    <p class="mt-4 text-gray-600">Jane adalah CTO yang memimpin pengembangan teknologi inovatif dan
                        solusi IT di Kolaborad.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <img class="w-24 h-24 rounded-full mx-auto" src="https://via.placeholder.com/150" alt="Member 3">
                    <h2 class="text-2xl font-semibold mt-4 text-gray-800">Michael Brown</h2>
                    <p class="text-gray-500 mt-2">Head of Marketing</p>
                    <p class="mt-4 text-gray-600">Michael memimpin tim pemasaran dengan strategi yang inovatif untuk
                        meningkatkan brand awareness.</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <img class="w-24 h-24 rounded-full mx-auto" src="https://via.placeholder.com/150" alt="Member 4">
                    <h2 class="text-2xl font-semibold mt-4 text-gray-800">Emily Davis</h2>
                    <p class="text-gray-500 mt-2">Project Manager</p>
                    <p class="mt-4 text-gray-600">Emily memastikan setiap proyek dijalankan dengan efisien dan
                        mencapai hasil terbaik untuk klien.</p>
                </div>

                <!-- Card 5 -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <img class="w-24 h-24 rounded-full mx-auto" src="https://via.placeholder.com/150" alt="Member 5">
                    <h2 class="text-2xl font-semibold mt-4 text-gray-800">David Lee</h2>
                    <p class="text-gray-500 mt-2">Lead Designer</p>
                    <p class="mt-4 text-gray-600">David adalah desainer utama yang bertanggung jawab untuk
                        menciptakan solusi desain kreatif untuk klien kami.</p>
                </div>

                <!-- Card 6 -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <img class="w-24 h-24 rounded-full mx-auto" src="https://via.placeholder.com/150" alt="Member 6">
                    <h2 class="text-2xl font-semibold mt-4 text-gray-800">Sophia Martinez</h2>
                    <p class="text-gray-500 mt-2">Software Engineer</p>
                    <p class="mt-4 text-gray-600">Sophia adalah insinyur perangkat lunak yang berfokus pada
                        pengembangan aplikasi yang efisien dan inovatif.</p>
                </div>
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