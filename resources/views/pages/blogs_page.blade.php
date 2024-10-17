<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>
    @vite('resources/css/app.css')
</head>

<body class="font-family-karla flex flex-col bg-gradient-to-r from-[#1d75bd] to-[#125f97]">

    @include('modals.navbar')

    <div class="relative h-screen bg-cover bg-center" style="background-image: url('images/blogs.jpg');">
        <!-- Overlay for darkening the background image -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Text overlay content -->
        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center text-white">
            <!-- Title -->
            <h1 class="text-4xl md:text-5xl font-bold">Blogs</h1>

            <!-- Breadcrumb -->
            <div class="mt-2 text-xl md:text-2xl font-semibold">
                <a href="#" class="text-white hover:text-gray-300">Home</a> /
                <span class="text-[#4993EB]">Blogs</span>
            </div>
        </div>
    </div>

    <div class="container mx-auto flex flex-col md:flex-row py-12 gap-8">
        
        <aside class="w-full md:w-1/3 px-4">
            <div class="w-full bg-white shadow-md rounded-lg p-6">
                <p class="text-2xl font-semibold pb-4">Category</p>

                <div class="flex flex-row gap-3">
                    <div id="category-links">
                        @foreach($categories as $category)
                            <a href="#" data-category-id="{{ $category->id }}" class="category-link w-full bg-blue-800 text-white font-semibold text-sm rounded hover:bg-blue-700 flex items-center justify-center px-4 py-2 mt-4">
                                {{ $category->judul }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div> 
        </aside>

        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col gap-8 px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                @foreach($articles as $article)
                <div class="article-item bg-white rounded-lg shadow-md overflow-hidden" data-category-id="{{ $article->category_id }}">
                    <img class="w-full h-48 object-cover" src="{{ asset($article->image) }}" alt="Blog Image">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800">{{ $article->title }}</h2>
                        <p class="text-gray-600 mt-2">{!! Str::limit($article->description, 100, '...') !!}</p>
                        <div class="flex justify-between items-center mt-4">
                            <a href="{{ route('Article-Overview', $article->id) }}" class="text-blue-500 hover:text-blue-600 font-medium">Read More</a>
                            <span class="text-gray-400 text-sm">{{ $article->created_at->format('d F Y') }}</span>
                        </div>
                    </div>
                </div>
                @endforeach                
            </div>
        </section>
    </div>

    @include('modals.footer')

</body>
<script>
    document.querySelectorAll('.category-link').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        const selectedCategoryId = this.getAttribute('data-category-id');
        const articles = document.querySelectorAll('.article-item');

        articles.forEach(article => {
            const articleCategoryId = article.getAttribute('data-category-id');

            if (!selectedCategoryId || articleCategoryId === selectedCategoryId) {
                article.style.display = 'block'; // Tampilkan artikel
            } else {
                article.style.display = 'none'; // Sembunyikan artikel
            }
        });
    });
});
</script>

</html>