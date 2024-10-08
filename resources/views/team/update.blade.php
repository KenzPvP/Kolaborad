<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('team-update', $team->id) }}" enctype="multipart/form-data">
        @csrf
        {{-- @method('PUT') --}}

        <!-- Nama -->
        <div class="mb-4">
            <x-input-label for="name" :value="__('Nama')" />
            <x-text-input id="name" class="block mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" 
                          type="text" name="name" :value="old('name', $team->name )" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Perusahaan -->
        <div class="mb-4">
            <x-input-label for="jabatan" :value="__('Perusahaan')" />
            <x-text-input id="jabatan" class="block mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" 
                          type="text" name="jabatan" :value="old('jabatan', $team->jabatan)" />
            <x-input-error :messages="$errors->get('jabatan')" class="mt-2" />
        </div>

        <!-- Deskripsi -->
        <div class="mb-4">
            <x-input-label for="description" :value="__('Deskripsi Singkat')" />
            <textarea id="description" class="block mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 
                        bg-gray-800 text-gray-300 font-medium text-sm dark:bg-gray-900 dark:text-gray-300" 
                      name="description" rows="4">{{ old('description', $team->description) }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- Input Gambar -->
        <div class="mb-4">
            <x-input-label for="image" :value="__('Gambar Baru')" />
            <input type="file" id="image" name="image" class="block mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" 
                   accept="image/*" onchange="previewImage(event)" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        <!-- Preview Gambar Baru -->
        <div class="mt-5 flex items-center justify-center">
            <img id="image-preview" style="display:none; max-height: 200px;" />
        </div>

        <div class="mt-6">
            <x-input-label for="current_image" :value="__('Gambar Saat Ini')" />
            @if($team->image)
                <img src="{{ asset($team->image) }}" alt="Team Image" class="mt-2 rounded-md shadow-md" width="150">
            @else
                <p class="text-gray-500 mt-2">Tidak ada gambar.</p>
            @endif
        </div>


        <!-- Tombol Kirim -->
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-3">
                {{ __('Update') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Script untuk Preview Gambar -->
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
