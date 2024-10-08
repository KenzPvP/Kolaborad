<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800">
    <!-- Navbar -->
    @include('modals.navbar')

    <div class="container mx-auto px-4 py-10">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Article Section -->
            <article class="w-full lg:w-2/3 bg-white p-10 lg:p-20 rounded-lg shadow-lg">
                <h2 class="text-4xl font-bold mb-6 text-[#4993EB]">Judul Artikel</h2>
                <p class="text-gray-600 mb-4">Penulis: <strong class="text-[#4993EB]">Nama Penulis</strong> | Tanggal: 13 September 2024</p>
                <img src="images/blogs.jpg" alt="Gambar Artikel" class="w-full h-auto rounded-lg mb-6">
                <p class="text-lg mb-4 text-gray-700 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis augue at velit convallis placerat.
                </p>
                <h3 class="text-2xl font-bold mb-3 text-[#4993EB]">Subjudul Artikel</h3>
                <p class="text-lg mb-4 text-gray-700 leading-relaxed">
                    Suspendisse potenti. Donec et velit lorem. Nam sagittis odio id massa pellentesque, nec lacinia lorem scelerisque.
                </p>
                <blockquote class="border-l-4 border-blue-500 pl-4 italic text-lg my-6">
                    "Artikel yang bagus membawa pembaca pada wawasan baru dan inspirasi baru."
                </blockquote>
                <p class="text-lg mb-4 text-gray-700 leading-relaxed">
                    Curabitur fringilla lorem eu bibendum malesuada. Cras vitae interdum libero.
                </p>
            </article>

            <!-- Sidebar -->
            <aside class="w-full lg:w-1/3 bg-gradient-to-r from-[#4993EB] to-[#3065BC] p-8 lg:p-10 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-6 text-white">Artikel Lainnya</h3>
                <div class="grid gap-6">
                    <!-- Card 1 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
                        <img src="images/blogs.jpg" alt="Artikel 1" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <h5 class="text-xl font-bold mb-3">Noteworthy technology acquisitions 2021</h5>
                            <p class="text-gray-700 mb-3">Here are the biggest enterprise technology acquisitions of 2021.</p>
                            <a href="#" class="text-blue-500 hover:text-blue-600 font-semibold">Read More</a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
                        <img src="images/blogs.jpg" alt="Artikel 2" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <h5 class="text-xl font-bold mb-3">Top 10 Web Development Trends in 2024</h5>
                            <p class="text-gray-700 mb-3">Exploring the latest web development trends.</p>
                            <a href="#" class="text-blue-500 hover:text-blue-600 font-semibold">Read More</a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    <!-- Footer -->
    @include('modals.footer')
</body>

</html>
