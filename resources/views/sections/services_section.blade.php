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




    <div class="flex flex-col md:flex-row py-10 bg-gradient-to-r from-[#1d75bd] to-[#125f97]">
        <!-- Left section with text -->
        <div class="w-full md:w-1/2 flex justify-center p-10">
            <div class="text-start flex flex-col gap-8">
                <h2 class="text-2xl text-[#f9f4ca] font-semibold tracking-wide uppercase">Layanan kami</h2>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 14 14"><g fill="none" stroke="#4993eb" stroke-linecap="round" stroke-linejoin="round"><path d="M9.5 1.5H11a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-10a1 1 0 0 1 1-1h1.5"/><path d="M8.5.5h-3a1 1 0 0 0-1 1V2a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-.5a1 1 0 0 0-1-1M4.046 6.203a1.25 1.25 0 1 0 2.5 0a1.25 1.25 0 0 0-2.5 0m3.406 2.63l2.5 2.5m.002-2.5l-2.5 2.5"/></g></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-700 mb-2">Marketing Strategy</h3>
                <p class="text-gray-600 mb-4">Kami membantu klien dalam menyusun dan mengimplementasikan strategi pemasaran yang
                    efektif dan terukur untuk meningkatkan brand awareness dan engagement di pasar.
                </p>
                <a href="{{ route('service_page') }}" class="text-blue-600 font-semibold hover:underline flex items-center">Learn
                    More
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7-7 7">
                        </path>
                    </svg>
                </a>
            </div>
            <!-- Card 2 -->
            <div class="bg-white shadow-lg p-6  ">
                <div class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 48 48"><g fill="none" stroke="#4993eb" stroke-linejoin="round" stroke-width="4"><path d="M41 14L24 4L7 14v20l17 10l17-10z"/><path stroke-linecap="round" d="M24 22v8m8-12v12m-16-4v4"/></g></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-700 mb-2">Sales B2B & B2C Development</h3>
                <p class="text-gray-600 mb-4">Tim kami memberikan bimbingan dalam mengembangkan strategi penjualan yang optimal, baik
                    untuk Business-to-Business (B2B) maupun Business-to-Consumer (B2C).</p>
                <a href="{{ route('service_b2b_page') }}" class="text-blue-600 font-semibold hover:underline flex items-center">Learn
                    More
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7-7 7">
                        </path>
                    </svg>
                </a>
            </div>
            <!-- Card 3 -->
            <div class="bg-white shadow-lg p-6  ">
                <div class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 16 16"><path fill="#4993eb" fill-rule="evenodd" d="M11.25 1a.75.75 0 0 1 .75.75V3h2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2V1.75a.75.75 0 0 1 1.5 0V3h5V1.75a.75.75 0 0 1 .75-.75M2.5 7.5v6h11v-6zm0-1.5h11V4.5h-11zm7.78 2.97a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-1.25-1.25a.75.75 0 1 1 1.06-1.06l.72.72l1.72-1.72a.75.75 0 0 1 1.06 0" clip-rule="evenodd"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-700 mb-2">Financial Planning & Management</h3>
                <p class="text-gray-600 mb-4"> Layanan kami mencakup manajemen keuangan yang kuat, termasuk pengelolaan cash flow,
                    budgeting, dan perencanaan strategi keuangan untuk masa depan yang lebih stabil.</p>
                <a href="#" class="text-blue-600 font-semibold hover:underline flex items-center">Learn
                    More
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7-7 7">
                        </path>
                    </svg>
                </a>
            </div>
            <!-- Card 4 -->
            <div class="bg-white shadow-lg p-6  ">
                <div class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 14 14"><path fill="none" stroke="#4993eb" stroke-linecap="round" stroke-linejoin="round" d="M4.194 8.094a1.86 1.86 0 1 0 0-3.719a1.86 1.86 0 0 0 0 3.719M.523 13.479A3.7 3.7 0 0 1 1 11.704a3.71 3.71 0 0 1 3.195-1.868c1.31.003 2.55.727 3.195 1.868a3.7 3.7 0 0 1 .477 1.774m2.02-12.095v-.82m2.799 1.827l.671-.471m-6.271.471l-.672-.471m5.506 3.139a2.055 2.055 0 0 0-2.077-2.042a2.055 2.055 0 0 0-1.99 2.127a2.07 2.07 0 0 0 1.126 1.73v1a.227.227 0 0 0 .226.22h1.361a.227.227 0 0 0 .227-.22V6.855a2.07 2.07 0 0 0 1.128-1.797Z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-700 mb-2">Digital Transformation & IT Solutions</h3>
                <p class="text-gray-600 mb-4">Kolaborad memberikan solusi digital yang terintegrasi untuk membantu bisnis bertransformasi
                    secara teknologi, meningkatkan efisiensi operasional, dan mengoptimalkan manajemen data.</p>
                <a href="#" class="text-blue-600 font-semibold hover:underline flex items-center">Learn
                    More
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7-7 7">
                        </path>
                    </svg>
                </a>
            </div>
            <a href="/services"
                class="relative flex h-[50px] w-40 items-center justify-center overflow-hidden bg-blue-600 font-medium text-white shadow-2xl transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-white hover:text-blue-600 hover:shadow-blue-600 hover:before:border-[25px] rounded-xl self-end mt-10">
                <span class="relative z-10">Pelajari layanan</span>
            </a>
        </div>


    </div>
</section>
