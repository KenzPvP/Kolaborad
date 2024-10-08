<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('category-store') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="judul" :value="__('Judul')" />
            <x-text-input id="judul" class="block mt-1 w-full" type="judul" name="judul" :value="old('judul')" />
            <x-input-error :messages="$errors->get('judul')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-3">
                {{ __('Kirim') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
