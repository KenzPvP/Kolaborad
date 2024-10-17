<section class="bg-gradient-to-r from-[#1d75bd] to-[#125f97]">

    <div class="relative h-screen bg-cover bg-center" style="background-image: url('images/blogs.jpg');">
        <!-- Overlay for darkening the background image -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Text overlay content -->
        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center text-white">
            <!-- Title -->
            <h1 class="text-4xl font-bold">Blogs</h1>

            <!-- Breadcrumb -->
            <div class="mt-2 text-xl font-semibold">
                <a href="#" class="text-white">Home</a> /
                <span class="text-[#4993EB]">Blogs</span>
            </div>
        </div>
    </div>

    <div class="relative min-h-96 bg-no-repeat bg-cover bg-center"
        style="background-image: url('images/Polygon.png'); ">
        <div class="flex flex-col justify-center items-center w-full py-36">
            <h2 class="text-center text-2xl font-semibold text-[#f9f4ca] mb-12">Blogs</h2>
            <div
                class="container justify-center items-center p-32 mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                <!-- Card 1 -->
                @foreach($blog as $blog)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset($blog->image) }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ route('Article-Overview', $blog->id) }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $blog->title }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{!! Str::limit($blog->description, 100, '...') !!}</p>
                        <a href="{{ route('Article-Overview', $blog->id) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach


            </div>
            <a href="/blogs"
                class="relative flex h-[50px] w-40 items-center justify-center overflow-hidden bg-blue-600 font-medium text-white shadow-2xl transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-white hover:text-blue-600 hover:shadow-blue-600 hover:before:border-[25px] rounded-xl self-center mt-10">
                <span class="relative z-10">Baca blogs</span>
            </a>
        </div>
    </div>

</section>