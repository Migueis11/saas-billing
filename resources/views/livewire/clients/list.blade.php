<x-app-layout >
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12" x-data="{ showCreateClientModal: false }">
        <div class="form-button-section">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <button href="{{ route('clients.create') }}" x-on:click="showCreateClientModal = true"
                    class="dark:bg-gray-800 mb-4 dark:text-white px-4 py-2 rounded-md hover:bg-black-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black-500">
                    {{ __('Add Client') }}
                </button>
            </div>
            <div class="form-modal bg-white dark:bg-gray-700 fixed inset-0 z-50 flex items-center justify-center" style="--tw-bg-opacity: 0.5;" x-show="showCreateClientModal">
                @livewire('clients.create', ['showModal' => 'showCreateClientModal'])
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr
                            class="px-6 py-4 text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                            <th class="p-2">Name</th>
                            <th class="p-2">Email</th>
                            <th class="p-2">Phone</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @forelse ($clients as $client)
                            <tr>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ $client->phone }}</td>
                            </tr>
                        @empty
                            <tr class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400 text-center">
                                <td class="p-2" colspan="3">No clients found.</td>
                            </tr>

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-app-layout>