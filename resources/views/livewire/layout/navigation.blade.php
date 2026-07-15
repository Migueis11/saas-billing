<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div x-data="{ open: false }">
    <div
        class="sticky top-0 z-30 flex items-center justify-between h-16 px-4 bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 sm:hidden">
        <a href="{{ route('dashboard') }}" wire:navigate>
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
        </a>

        <button @click="open = ! open"
            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <div x-show="open" x-transition.opacity @click="open = false" class="fixed inset-0 z-40 bg-gray-900/50 sm:hidden"
        style="display: none;"></div>

    <aside :class="open ? 'translate-x-0' : '-translate-x-full'" style="height: 100vh;"
        class="fixed inset-y-0 start-0 z-50 flex w-64 -translate-x-full transform flex-col bg-white dark:bg-gray-800 border-e border-gray-100 dark:border-gray-700 transition-transform duration-200 ease-in-out sm:translate-x-0">
        <div class="flex items-center h-16 px-6 shrink-0">
            <a href="{{ route('dashboard') }}" wire:navigate>
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
            </a>
        </div>

        <nav class="flex-1 p-4 space-y-1 overflow-y-auto">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('clients')" :active="request()->routeIs('clients')" wire:navigate>
                {{ __('Clients') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('invoices')" :active="request()->routeIs('invoices')" wire:navigate>
                {{ __('Invoices') }}
            </x-responsive-nav-link>
        </nav>

        <div class="border-t border-gray-200 dark:border-gray-700 p-3">
            <div class="px-3 py-2">
                <div class="font-medium text-sm text-gray-800 dark:text-gray-200"
                    x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                    x-on:profile-updated.window="name = $event.detail.name"></div>
                <div class="text-xs text-gray-500 dark:text-gray-400 truncate">{{ auth()->user()->email }}</div>
            </div>

            <div class="mt-2 space-y-1">
                <x-responsive-nav-link :href="route('profile')" wire:navigate>
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <button wire:click="logout" class="w-full text-start">
                    <x-responsive-nav-link>
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </button>
            </div>
        </div>
    </aside>
</div>