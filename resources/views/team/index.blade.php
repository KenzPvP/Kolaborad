<x-app-layout>
    @include('sweetalert::alert')
    <x-slot name="header">
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
            <x-nav-link :href="route('team-list')" :active="request()->routeIs('team-list')">
                {{ __('Team') }}
            </x-nav-link>
            <x-nav-link :href="route('team-create')" :active="request()->routeIs('team-create')">
                {{ __('Tambah Data') }}
            </x-nav-link>
        </div>
      
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative flex flex-col w-full h-full overflow-scroll text-slate-300 bg-slate-800 shadow-md rounded-lg bg-clip-border">
                    <table class="w-full text-left table-auto min-w-max text-gray-900 dark:text-gray-100">
                        <thead class="thead-dark text-xl font-bold mb-4">
                            <tr>
                                <th class="p-2 text-center">No</th>
                                <th class="p-2 text-center">Name</th>
                                <th class="p-2 text-center">Perusahaan</th>
                                <th class="p-2 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $index => $team)
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="border px-4 py-2 text-center">{{ $index + 1 }}</td>
                                <td class="border px-4 py-2 text-left">{{ $team->name }}</td>
                                <td class="border px-4 py-2 text-left">{{ $team->jabatan }}</td>
                                <td class="border px-4 py-2 text-center">
                                    <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2" href="{{ route('team-edit', $team->id) }}">
                                        Edit
                                    </a>
                                    <form action="{{ route('team-delete', $team->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>            

            </div>
        </div>
    </div>
    
    
</x-app-layout>