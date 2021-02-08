{{-- Desktop Menu --}}
<aside class="hidden md:inline w-56 bg-white dark:bg-grey-800 border-r border-grey-200 dark:border-grey-700 py-6">
    <x-nav-menu></x-nav-menu>
</aside>

{{-- Mobile Menu --}}
<aside
    class="fixed inset-y-0 z-20 flex-shrink-0 mt-20 overflow-y-auto w-56 bg-white dark:bg-grey-800 border-t border-r border-grey-200 dark:border-grey-700 py-6 md:hidden"
    x-show="isSidebarOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="isSidebarOpen = false"
    @keydown.escape="isSidebarOpen = false">
    <p class="px-6 pb-6 border-b border-grey-200 dark:border-grey-700 font-bold text-xl">{{ Auth::user()->name }}</p>
    <x-nav-menu></x-nav-menu>
    <div class="border-t border-b border-grey-200 dark:border-grey-700">
        <x-mobile-nav-link icon="user">Profile</x-mobile-nav-link>
        <!-- Authentication -->
        <form method="POST" action="{{ route('sign-out') }}">
            @csrf

            <x-mobile-nav-link :href="route('sign-out')"
                               onclick="event.preventDefault();
                                                this.closest('form').submit();" bgHover="red" class="hover:text-white"
                               icon="lock">Sign Out
            </x-mobile-nav-link>
        </form>
    </div>
</aside>

{{-- Backdrop --}}
<div x-show="isSidebarOpen" x-transition:enter="transition ease-in-out duration-150"
     x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
