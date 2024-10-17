<!-- Section Testimoni -->
<section>

    <div class="relative h-screen bg-cover bg-center" style="background-image: url('images/testimonial.png');">
        <!-- Overlay for darkening the background image -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Text overlay content -->
        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center text-white">
            <!-- Title -->
            <h1 class="text-4xl font-bold">Testimoni</h1>

            <!-- Breadcrumb -->
            <div class="mt-2 text-xl font-semibold">
                <a href="#" class="text-white">Home</a> /
                <span class="text-[#4993EB]">Testimoni</span>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row p-32 py-10 bg-white">
        <!-- Left section with image -->
        <div class="w-full md:w-1/2 flex justify-center">
            <img src="images/testimoni.png" alt="Illustration" class="flex h-96 object-contain">
        </div>

        <!-- Right section with text -->
        <div class="w-full md:w-1/2 flex justify-center p-10">
            <div class="text-end flex flex-col gap-8">
                <h2 class="text-2xl text-[#4993EB] font-semibold tracking-wide uppercase">Testimoni Klien</h2>
                <p class="text-xl text-gray-500">
                    Di Kolaborad, kami berkomitmen untuk memberikan solusi IT yang inovatif dan berkelanjutan.
                    Dengarkan langsung dari klien kami tentang bagaimana kami membantu mereka mengoptimalkan operasi,
                    meningkatkan efisiensi, dan mencapai tujuan bisnis mereka.
                </p>
            </div>
        </div>
    </div>

    <div class="flex flex-col w-full p-32 py-36 bg-gradient-to-r from-[#1d75bd] to-[#125f97]">
        <h2 class="text-center text-2xl font-semibold text-[#f9f4ca] mb-12">Testimoni</h2>


        <!-- Team Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($data as $testimoni)
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


</section>

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