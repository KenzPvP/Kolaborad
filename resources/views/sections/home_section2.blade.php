<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="flex flex-col md:flex-row h-screen w-full bg-gradient-to-r from-[#4993EB] to-[#3065BC] bg-cover bg-center shrink-0" style="background-image: url('images/consultant.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <!-- Bagian kiri dengan background gradient -->
        <div class="relative w-full md:w-1/2 p-24 md:p-32 flex flex-col justify-center text-white bg-cover bg-center">


            <!-- Konten bagian kiri -->
            <div
                class="relative z-10 flex flex-col justify-center md:justify-start gap-5 md:gap-8 items-center md:items-start">
                <div class="flex flex-col">
                    <p class="text-sm md:text-start text-center">Let's start your business</p>
                    <h1 class="tracking-wider md:text-start text-center text-3xl md:text-6xl font-bold">Shift your
                        business<br> with Kolaborad</h1>
                </div>
                <p class="text-lg md:text-start text-center">Mulai memilih konsultasi untuk bisnis anda<br> bersama dengan
                    Kolaborad.</p>
                <button
                class="relative flex h-[50px] w-40 items-center justify-center overflow-hidden bg-blue-600 font-medium text-white shadow-2xl transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-white hover:text-blue-600 hover:shadow-blue-600 hover:before:border-[25px] rounded-xl">
                    <span class="relative z-10">Mulai sekarang</span>
                </button>
            </div>
        </div>



        <!-- Bagian kanan dengan gambar logo -->
        <div class="md:w-1/2 flex justify-center items-center z-10">
            <img src="images/Group 27 (6).png" alt="Kolaborad Logo" class=" h-auto">
        </div>
    </section>
</body>
</html>