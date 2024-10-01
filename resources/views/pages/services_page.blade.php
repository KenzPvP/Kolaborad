<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services</title>
    @vite('resources/css/app.css')
</head>

<body id="services">
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 14 14"><g fill="none" stroke="#4993eb" stroke-linecap="round" stroke-linejoin="round"><path d="M9.5 1.5H11a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-10a1 1 0 0 1 1-1h1.5"/><path d="M8.5.5h-3a1 1 0 0 0-1 1V2a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-.5a1 1 0 0 0-1-1M4.046 6.203a1.25 1.25 0 1 0 2.5 0a1.25 1.25 0 0 0-2.5 0m3.406 2.63l2.5 2.5m.002-2.5l-2.5 2.5"/></g></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Marketing Strategy</h3>
                    <p class="text-gray-600 mb-4"> Kami membantu klien dalam menyusun dan mengimplementasikan strategi pemasaran yang
                        efektif dan terukur untuk meningkatkan brand awareness dan engagement di pasar.

                    </p>
                    <a href="{{ route('service_page') }}" class="text-blue-600 font-semibold hover:underline flex items-center">Learn
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 48 48"><g fill="none" stroke="#4993eb" stroke-linejoin="round" stroke-width="4"><path d="M41 14L24 4L7 14v20l17 10l17-10z"/><path stroke-linecap="round" d="M24 22v8m8-12v12m-16-4v4"/></g></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Sales B2B & B2C Development</h3>
                    <p class="text-gray-600 mb-4"> Tim kami memberikan bimbingan dalam mengembangkan strategi penjualan yang optimal, baik
                        untuk Business-to-Business (B2B) maupun Business-to-Consumer (B2C).
                       </p>
                    <a href="{{ route('service_b2b_page') }}" class="text-blue-600 font-semibold hover:underline flex items-center">Learn
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 16 16"><path fill="#4993eb" fill-rule="evenodd" d="M11.25 1a.75.75 0 0 1 .75.75V3h2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2V1.75a.75.75 0 0 1 1.5 0V3h5V1.75a.75.75 0 0 1 .75-.75M2.5 7.5v6h11v-6zm0-1.5h11V4.5h-11zm7.78 2.97a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-1.25-1.25a.75.75 0 1 1 1.06-1.06l.72.72l1.72-1.72a.75.75 0 0 1 1.06 0" clip-rule="evenodd"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Financial Planning & Management</h3>
                    <p class="text-gray-600 mb-4"> Layanan kami mencakup manajemen keuangan yang kuat, termasuk pengelolaan cash flow,
                        budgeting, dan perencanaan strategi keuangan untuk masa depan yang lebih stabil.
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
                <!-- Card 4 -->
                <div class="bg-white shadow-lg p-6  ">
                    <div class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 14 14"><path fill="none" stroke="#4993eb" stroke-linecap="round" stroke-linejoin="round" d="M4.194 8.094a1.86 1.86 0 1 0 0-3.719a1.86 1.86 0 0 0 0 3.719M.523 13.479A3.7 3.7 0 0 1 1 11.704a3.71 3.71 0 0 1 3.195-1.868c1.31.003 2.55.727 3.195 1.868a3.7 3.7 0 0 1 .477 1.774m2.02-12.095v-.82m2.799 1.827l.671-.471m-6.271.471l-.672-.471m5.506 3.139a2.055 2.055 0 0 0-2.077-2.042a2.055 2.055 0 0 0-1.99 2.127a2.07 2.07 0 0 0 1.126 1.73v1a.227.227 0 0 0 .226.22h1.361a.227.227 0 0 0 .227-.22V6.855a2.07 2.07 0 0 0 1.128-1.797Z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Digital Transformation & IT Solutions</h3>
                    <p class="text-gray-600 mb-4"> Kolaborad memberikan solusi digital yang terintegrasi untuk membantu bisnis bertransformasi
                        secara teknologi, meningkatkan efisiensi operasional, dan mengoptimalkan manajemen data.
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
                <!-- Card 5 -->
                <div class="bg-white shadow-lg p-6  ">
                    <div class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><path fill="none" stroke="#4993eb" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m12 22l-2-6H2l2 6zm0 0h4m-4-9v-.5c0-1.886 0-2.828-.586-3.414S9.886 8.5 8 8.5s-2.828 0-3.414.586S4 10.614 4 12.5v.5m15 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0m-9-9a2 2 0 1 1-4 0a2 2 0 0 1 4 0m4 13.5h6a2 2 0 0 1 2 2v.5a2 2 0 0 1-2 2h-1" color="#4993eb"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Coaching dan Mentoring</h3>
                    <p class="text-gray-600 mb-4">Kami memiliki jaringan coach dan mentor yang berpengalaman di berbagai bidang seperti
                        marketing, sales, finance, dan IT, yang siap memberikan insight dan strategi yang diperlukan untuk
                        membantu bisnis tumbuh.

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
                <!-- Card 6 -->
                <div class="bg-white shadow-lg p-6  ">
                    <div class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><g fill="none" stroke="#4993eb" stroke-width="1.5"><path d="M17.414 10.414C18 9.828 18 8.886 18 7s0-2.828-.586-3.414m0 6.828C16.828 11 15.886 11 14 11h-4c-1.886 0-2.828 0-3.414-.586m10.828 0Zm0-6.828C16.828 3 15.886 3 14 3h-4c-1.886 0-2.828 0-3.414.586m10.828 0Zm-10.828 0C6 4.172 6 5.114 6 7s0 2.828.586 3.414m0-6.828Zm0 6.828ZM13 7a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z"/><path stroke-linecap="round" d="M18 6a3 3 0 0 1-3-3m3 5a3 3 0 0 0-3 3M6 6a3 3 0 0 0 3-3M6 8a3 3 0 0 1 3 3m-4 9.388h2.26c1.01 0 2.033.106 3.016.308a14.9 14.9 0 0 0 5.33.118c.868-.14 1.72-.355 2.492-.727c.696-.337 1.549-.81 2.122-1.341c.572-.53 1.168-1.397 1.59-2.075c.364-.582.188-1.295-.386-1.728a1.89 1.89 0 0 0-2.22 0l-1.807 1.365c-.7.53-1.465 1.017-2.376 1.162q-.165.026-.345.047m0 0l-.11.012m.11-.012a1 1 0 0 0 .427-.24a1.49 1.49 0 0 0 .126-2.134a1.9 1.9 0 0 0-.45-.367c-2.797-1.669-7.15-.398-9.779 1.467m9.676 1.274a.5.5 0 0 1-.11.012m0 0a9.3 9.3 0 0 1-1.814.004"/><rect width="3" height="8" x="2" y="14" rx="1.5"/></g></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Business Process Improvement</h3>
                    <p class="text-gray-600 mb-4"> Kami mengidentifikasi dan memperbaiki proses bisnis klien untuk meningkatkan
                        efisiensi, mengurangi biaya, dan mempercepat pertumbuhan.
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
                <!-- Card 7 -->
                <div class="bg-white shadow-lg p-6  ">
                    <div class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><path fill="none" stroke="#4993eb" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.022 6.787v13M11 19.5c-.222 0-.677-.242-1.585-.726c-.923-.492-2.198-.982-3.832-1.29c-1.834-.344-2.75-.516-3.167-1.025C2 15.949 2 15.135 2 13.504V7.097c0-1.783 0-2.675.649-3.224c.648-.549 1.41-.406 2.933-.12c3.008.566 4.8 1.749 5.418 2.428c.618-.679 2.41-1.862 5.418-2.427c1.523-.287 2.285-.43 2.933.119c.649.549.649 1.44.649 3.224V10m.864 2.94l.695.692a1.496 1.496 0 0 1 0 2.12l-3.642 3.696a2 2 0 0 1-1.051.552l-2.257.488a.5.5 0 0 1-.598-.593l.48-2.235c.075-.397.268-.762.555-1.047l3.688-3.674a1.51 1.51 0 0 1 2.13 0" color="#4993eb"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Training (In-Class, Online, dan Hybrid)</h3>
                    <p class="text-gray-600 mb-4"> Kolaborad menyediakan berbagai program pelatihan baik dalam kelas (in-class),
                        online, maupun hybrid, yang disesuaikan dengan kebutuhan bisnis klien untuk
                        mengembangkan kemampuan dan pengetahuan tim mereka.
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
                <!-- Card 8 -->
                <div class="bg-white shadow-lg p-6  ">
                    <div class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><g fill="none" stroke="#4993eb" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="#4993eb"><path d="M3 14v-4c0-3.771 0-5.657 1.172-6.828S7.229 2 11 2h2c3.771 0 5.657 0 6.828 1.172S21 6.229 21 10v4c0 3.771 0 5.657-1.172 6.828S16.771 22 13 22h-2c-3.771 0-5.657 0-6.828-1.172S3 17.771 3 14"/><path d="M11.333 10.667c1.055 1.055 2.445 2.127 2.445 2.127l1.904-1.905s-1.072-1.39-2.126-2.445C12.5 7.39 11.11 6.317 11.11 6.317L9.206 8.222s1.072 1.39 2.127 2.445m0 0L8 14m8-3.429l-2.54 2.54M11.43 6L8.89 8.54M8 18h8"/></g></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Pengurusan Legalitas Perusahaan dan HAKI</h3>
                    <p class="text-gray-600 mb-4"> Kami juga menawarkan jasa pengurusan legalitas bisnis serta pengurusan Hak
                        Kekayaan Intelektual (HAKI), untuk memastikan perusahaan Anda berjalan sesuai
                        dengan peraturan yang berlaku.
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
                <!-- Card 9 -->
                <div class="bg-white shadow-lg p-6  ">
                    <div class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><path fill="#4993eb" d="m17.95 19.464l-2.138-2.114l.713-.708l1.425 1.42l3.525-3.525l.713.688zM7 20v-4H3.577V8.616h16.846v2.807q-.31-.1-.643-.165q-.334-.066-.667-.066q-1.7 0-3.114.88q-1.415.878-2.172 2.39H8V19h5.466q.078.28.203.521q.125.24.264.479zM7 7.846v-3.23h10v3.23z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Koneksi dengan Venture Capital (VC)</h3>
                    <p class="text-gray-600 mb-4"> Kolaborad membantu startup yang sedang mencari pendanaan dengan
                        menghubungkan mereka kepada Venture Capital yang sesuai, serta membantu
                        dalam proses negosiasi dan pitching.
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

</html>
