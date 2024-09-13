<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('modals.navbar')

    <!-- Section Layanan -->
    <section>
        <div class="relative h-screen bg-cover bg-center" style="background-image: url('images/operator.jpg');">
            <!-- Overlay for darkening the background image -->
            <div class="absolute inset-0 bg-black opacity-50"></div>

            <!-- Text overlay content -->
            <div class="relative z-10 flex flex-col justify-center items-center h-full text-center text-white">
                <!-- Title -->
                <h1 class="text-4xl font-bold">Layanan</h1>

                <!-- Breadcrumb -->
                <div class="mt-2 text-xl font-semibold">
                    <a href="#" class="text-white">Home</a> /
                    <span class="text-[#4993EB]">Layanan</span>
                </div>
            </div>
        </div>
        <!-- Overlay -->




        <div class="flex flex-col md:flex-row py-10 bg-gradient-to-r from-[#4993EB] to-[#3065BC]">
            <!-- Left section with text -->
            <div class="w-full md:w-1/2 flex justify-center p-10">
                <div class="text-start flex flex-col gap-8">
                    <h2 class="text-2xl text-white font-semibold tracking-wide uppercase">Layanan kami</h2>
                    <p class="text-xl text-white">
                        Layanan-layanan kami memberikan solusi holistik<br> untuk mengoptimalkan strategi IT dan
                        meningkatkan<br>
                        kinerja perusahaan dalam era digital.
                    </p>
                </div>
            </div>
            <!-- Right section with image -->
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="images/services2.png" alt="Illustration" class="flex h-96 object-contain">
            </div>
        </div>

        <div class="flex flex-col w-full py-36 bg-white">
            <h2 class="text-center text-2xl font-semibold text-[#4993EB] mb-12">DAFTAR LAYANAN</h2>
            <div class="container p-32 mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                <!-- Card 1 -->
                <div class="bg-white shadow-lg p-6  ">
                    <div class="flex items-center mb-4">
                        <img src="images/idea.png" alt="Icon" class="w-10 h-10">
                    </div>
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Solusi IT</h3>
                    <p class="text-gray-600 mb-4">Solusi ini membantu perusahaan memanfaatkan teknologi digital
                        untuk mengubah operasi bisnis mereka, meningkatkan efisiensi, dan menciptakan inovasi baru.
                    </p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline flex items-center">Learn
                        More
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-7-7l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <!-- Card 2 -->
                <div class="bg-white shadow-lg p-6  ">
                    <div class="flex items-center mb-4">
                        <img src="images/digital-transformation.png" alt="Icon" class="w-10 h-10">
                    </div>
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Strategi IT dan Transformasi Digital</h3>
                    <p class="text-gray-600 mb-4">Membantu perusahaan merancang strategi IT yang sejalan dengan
                        tujuan bisnis jangka panjang. Layanan ini meliputi perencanaan transformasi digital, adopsi
                        teknologi baru, dan pengembangan arsitektur IT yang mendukung inovasi.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline flex items-center">Learn
                        More
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-7-7l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <!-- Card 3 -->
                <div class="bg-white shadow-lg p-6  ">
                    <div class="flex items-center mb-4">
                        <img src="images/page-speed.png" alt="Icon" class="w-10 h-10">
                    </div>
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Strategi IT dan Transformasi Digital</h3>
                    <p class="text-gray-600 mb-4">Membantu perusahaan merancang strategi IT yang sejalan dengan
                        tujuan bisnis jangka panjang. Layanan ini meliputi perencanaan transformasi digital, adopsi
                        teknologi baru, dan pengembangan arsitektur IT yang mendukung inovasi.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline flex items-center">Learn
                        More
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-7-7l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <!-- Card 4 -->
                <div class="bg-white shadow-lg p-6  ">
                    <div class="flex items-center mb-4">
                        <img src="images/page-speed.png" alt="Icon" class="w-10 h-10">
                    </div>
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Strategi IT dan Transformasi Digital</h3>
                    <p class="text-gray-600 mb-4">Membantu perusahaan merancang strategi IT yang sejalan dengan
                        tujuan bisnis jangka panjang. Layanan ini meliputi perencanaan transformasi digital, adopsi
                        teknologi baru, dan pengembangan arsitektur IT yang mendukung inovasi.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline flex items-center">Learn
                        More
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-7-7l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <!-- Card 1 -->
                <div class="bg-white shadow-lg p-6  ">
                    <div class="flex items-center mb-4">
                        <img src="images/idea.png" alt="Icon" class="w-10 h-10">
                    </div>
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Solusi IT</h3>
                    <p class="text-gray-600 mb-4">Solusi ini membantu perusahaan memanfaatkan teknologi digital
                        untuk mengubah operasi bisnis mereka, meningkatkan efisiensi, dan menciptakan inovasi baru.
                    </p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline flex items-center">Learn
                        More
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-7-7l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <!-- Card 2 -->
                <div class="bg-white shadow-lg p-6  ">
                    <div class="flex items-center mb-4">
                        <img src="images/digital-transformation.png" alt="Icon" class="w-10 h-10">
                    </div>
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Strategi IT dan Transformasi Digital</h3>
                    <p class="text-gray-600 mb-4">Membantu perusahaan merancang strategi IT yang sejalan dengan
                        tujuan bisnis jangka panjang. Layanan ini meliputi perencanaan transformasi digital, adopsi
                        teknologi baru, dan pengembangan arsitektur IT yang mendukung inovasi.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline flex items-center">Learn
                        More
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-7-7l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <!-- Card 3 -->
                <div class="bg-white shadow-lg p-6  ">
                    <div class="flex items-center mb-4">
                        <img src="images/page-speed.png" alt="Icon" class="w-10 h-10">
                    </div>
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Strategi IT dan Transformasi Digital</h3>
                    <p class="text-gray-600 mb-4">Membantu perusahaan merancang strategi IT yang sejalan dengan
                        tujuan bisnis jangka panjang. Layanan ini meliputi perencanaan transformasi digital, adopsi
                        teknologi baru, dan pengembangan arsitektur IT yang mendukung inovasi.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline flex items-center">Learn
                        More
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-7-7l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <!-- Card 4 -->
                <div class="bg-white shadow-lg p-6  ">
                    <div class="flex items-center mb-4">
                        <img src="images/page-speed.png" alt="Icon" class="w-10 h-10">
                    </div>
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Strategi IT dan Transformasi Digital</h3>
                    <p class="text-gray-600 mb-4">Membantu perusahaan merancang strategi IT yang sejalan dengan
                        tujuan bisnis jangka panjang. Layanan ini meliputi perencanaan transformasi digital, adopsi
                        teknologi baru, dan pengembangan arsitektur IT yang mendukung inovasi.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline flex items-center">Learn
                        More
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-7-7l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </section>
    @include('modals.footer')


</body>

</html>
