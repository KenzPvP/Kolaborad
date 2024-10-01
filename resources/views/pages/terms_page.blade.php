<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Terms & Condition</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('modals.navbar')
    <div class="relative h-screen bg-cover bg-center" style="background-image: url('images/terms&condition.png');">
        <!-- Overlay for darkening the background image -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Text overlay content -->
        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center text-white">
            <!-- Title -->
            <h1 class="text-4xl font-bold">Terms & Condition</h1>

            <!-- Breadcrumb -->
            <div class="mt-2 text-xl font-semibold">
                <a href="#" class="text-white">Home</a> /
                <span class="text-[#4993EB]">Terms & Condition</span>
            </div>
        </div>
    </div>
    <div class="bg-gray-100 p-32 bg-gradient-to-r from-[#4993EB] to-[#3065BC]">
        <div class="flex flex-col container mx-auto px-4 py-8 gap-10">
            <div class="relative z-10 flex flex-col justify-center items-center h-full text-center text-white">
                <h1 class="text-2xl font-bold mb-3">Syarat dan Ketentuan</h2>
                    <p class="font-semibold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, iste
                        assumenda minus ut vel repudiandae asperiores aut tempore id, odit voluptates eveniet ipsam sed,
                        ea a nostrum ratione unde aliquam?</p>
            </div>
            <div class="flex flex-col gap-2">

                <h2 class="text-2xl font-bold mb-4 text-white">1. Ketentuan Penggunaan Website</h2>
                <p class="font-semibold text-white">
                    Dengan mengakses dan menggunakan situs web ini, Anda setuju untuk mematuhi Syarat dan Ketentuan ini.
                    Jika Anda tidak setuju dengan ketentuan ini, harap jangan gunakan situs web ini.
                </p>

                <h2 class="text-2xl font-bold mb-4 text-white">2. Hak dan Kewajiban Pengguna</h2>
                <p>
                    <li class="text-white font-semibold">Pengguna berhak untuk mengakses informasi dan layanan yang disediakan oleh
                        situs web.</li>
                    <li class="text-white font-semibold">Pengguna wajib memberikan informasi yang akurat dan terkini selama
                        pendaftaran dan menggunakan
                        layanan kami.</li>
                    <li class="text-white font-semibold"> Pengguna bertanggung jawab atas kerahasiaan akun dan kata sandi mereka.</li>
                </p>

                <h2 class="text-2xl font-bold mb-4 text-white">3. Hak dan Kewajiban Perusahaan</h2>
                <p>
                    <li class="text-white font-semibold">Perusahaan berhak untuk mengubah atau memperbarui konten yang ada di situs
                        web tanpa pemberitahuan
                        sebelumnya.</li>
                    <li class="text-white font-semibold">Perusahaan bertanggung jawab untuk menjaga keamanan dan privasi data pengguna
                        sesuai dengan
                        kebijakan privasi yang berlaku.</li>
                    <li class="text-white font-semibold">Perusahaan tidak bertanggung jawab atas kerugian yang timbul akibat
                        penggunaan situs web ini.</li>
                </p>

                <h2 class="text-2xl font-bold mb-4 text-white">4. Modifikasi Syarat dan Ketentuan</h2>
                <p class="font-semibold text-white">
                    Kami berhak untuk mengubah Syarat dan Ketentuan ini kapan saja. Jika kami melakukan perubahan, kami
                    akan memberi tahu Anda dengan memposting syarat yang diperbarui di situs web ini. Penggunaan
                    berkelanjutan Anda atas situs web setelah perubahan tersebut dianggap sebagai penerimaan Anda
                    terhadap perubahan tersebut.
                </p>

                <h2 class="text-2xl font-bold mb-4 text-white">5. Kontak Kami</h2>
                <p class="text-white font-semibold">
                    Jika Anda memiliki pertanyaan mengenai Syarat dan Ketentuan ini, silakan hubungi kami di [Informasi
                    Kontak Anda].
                </p>
            </div>
        </div>
    </div>
    </div>
    </div>
    @include('modals.footer')


</body>

</html>
