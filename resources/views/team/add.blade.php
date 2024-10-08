<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('team-store') }}" enctype="multipart/form-data">
        @csrf

        <!-- Nama -->
        <div class="mb-4">
            <x-input-label for="name" :value="__('Nama')" />
            <x-text-input id="name" class="block mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" type="text" name="name" :value="old('name')" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        
        <!-- Perusahaan -->
        <div class="mb-4">
            <x-input-label for="jabatan" :value="__('jabatan')" />
            <x-text-input id="jabatan" class="block mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" type="text" name="jabatan" :value="old('jabatan')" />
            <x-input-error :messages="$errors->get('jabatan')" class="mt-2" />
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
