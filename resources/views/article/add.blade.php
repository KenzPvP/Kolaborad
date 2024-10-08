<x-app-layout>
    <x-slot name="header">
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
            <x-nav-link :href="route('article-list')" :active="request()->routeIs('article-list')">
                {{ __('Article') }}
            </x-nav-link>
            <x-nav-link :href="route('article-create')" :active="request()->routeIs('article-create')">
                {{ __('Tambah Data') }}
            </x-nav-link>
        </div>    
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100">

                    <!-- Form -->
                    <form action="{{ route('article-store') }}" method="POST">
                        @csrf
                        <div class="mb-5">
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div class="mb-5">
                            <x-input-label for="category" :value="__('Kategori')" />
                            <select id="category" name="category_id" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option value="">Pilih Kategori</option>
                                @foreach($data as $category)
                                    <option value="{{ $category->id }}">{{ $category->judul }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                        </div>

                        <div class="mb-5">
                            <x-input-label for="content" :value="__('Content')" />
                            <textarea name="description"></textarea>
                            <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
                            <script>
                                var options = {
                                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
                                    clipboard_handleImages: false
                                };
                                CKEDITOR.replace('description', options);
                            </script>
                        </div>

                        <!-- Submit Button -->
                        <x-primary-button class="ms-3">
                            {{ __('Kirim') }}
                        </x-primary-button>
                    </form>
                    <!-- End Form -->

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
