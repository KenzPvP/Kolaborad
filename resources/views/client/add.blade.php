<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('client-store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-5">
            <x-input-label for="type" :value="__('Client')" />
            <select id="type" name="type" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                <option value="testimoni">Testimoni</option>
                <option value="kasus">Studi Kasus</option>
            </select>
            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
        </div>

        <!-- Nama -->
        <div class="mb-4">
            <x-input-label for="name" :value="__('Nama')" />
            <x-text-input id="name" class="block mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" type="text" name="name" :value="old('name')" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        
        <!-- Perusahaan -->
        <div class="mb-4">
            <x-input-label for="company" :value="__('Perusahaan/Jabatan/Pekerjaan')" />
            <x-text-input id="company" class="block mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" type="text" name="company" :value="old('company')" />
            <x-input-error :messages="$errors->get('company')" class="mt-2" />
        </div>
        
        <!-- Deskripsi -->
        <div class="mb-4">
            <x-input-label for="description" :value="__('Deskripsi singkat')" />
            <textarea id="description" class="block mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 bg-gray-800 text-gray-300 font-medium text-sm dark:bg-gray-900 dark:text-gray-300" name="description" rows="4">{{ old('description') }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>             
        
        <!-- Input Gambar -->
        <div class="mb-4">
            <x-input-label for="image" :value="__('Image')" />
            <input type="file" id="image" name="image" class="block mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" accept="image/*" onchange="previewImage(event)" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>
        
        

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-3">
                {{ __('Kirim') }}
            </x-primary-button>
        </div>
    </form>
       

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
</x-guest-layout>
