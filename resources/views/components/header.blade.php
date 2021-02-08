<header class="py-4 bg-white dark:bg-grey-800 border-b border-grey-200 dark:border-grey-700 relative z-20">
    <div class="mx-6 flex flex-row justify-between items-center">
        <a href="{{ route('dashboard') }}" class="flex flex-row items-center">
            <x-logo class="w-12 mr-2"></x-logo>
            <h2 class="text-xl font-bold">Groceries</h2>
        </a>

        <div class="flex">
            <div class="hidden md:inline">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <x-icon class="inline">user</x-icon>
                        <x-icon class="inline" size="16">chevron-down</x-icon>
                    </x-slot>

                    <x-slot name="content">
                        <div class="px-4 py-3 font-semibold text-lg border-b border-grey-200 dark:border-grey-600">
                            <span>{{ Auth::user()->name }}</span>
                        </div>
                        <x-dropdown-link icon="user">Profile</x-dropdown-link>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('sign-out') }}">
                            @csrf

                            <x-dropdown-link :href="route('sign-out')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();" bgHover="red" class="hover:text-white"
                                             icon="lock">Sign Out
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="inline md:hidden ml-4 md:ml-0 cursor-pointer" @click="isSidebarOpen = !isSidebarOpen">
                <x-icon>menu</x-icon>
            </div>
        </div>
    </div>
</header>
