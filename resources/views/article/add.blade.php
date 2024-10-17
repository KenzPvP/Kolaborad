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
                    <form action="{{ route('article-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-5">
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div class="mb-5">
                            <x-input-label for="penulis" :value="__('Penulis')" />
                            <x-text-input id="penulis" class="block mt-1 w-full" type="text" name="penulis" :value="old('penulis')" />
                            <x-input-error :messages="$errors->get('penulis')" class="mt-2" />
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

                        <div class="mb-4">
                            <x-input-label for="image" :value="__('Sampul')" />
                            <input type="file" id="image" name="image" class="block mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" accept="image/*" onchange="previewImage(event)" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <div class="mb-5">
                            <x-input-label for="content" :value="__('Content')" />
                            <textarea name="description"></textarea>
                            <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
                            <script>
                                var options = {
                                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=' + '{{ csrf_token() }}',
                                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=' + '{{ csrf_token() }}',
                                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
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

                    <script>
                        function previewImage(event) {
                            const imagePreview = document.getElementById('image-preview');
                            const file = event.target.files[0];
                            const reader = new FileReader();
                
                            reader.onload = function(e) {
                                imagePreview.src = e.target.result;
                                imagePreview.style.display = 'block';
                            }
                
                            if (file) {
                                reader.readAsDataURL(file);
                            } else {
                                imagePreview.style.display = 'none';
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
