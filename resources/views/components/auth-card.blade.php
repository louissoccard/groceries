<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-grey-100 dark:bg-grey-800">
    <div class="flex flex-col items-center w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-grey-900 shadow-md overflow-hidden">
        <a href="{{ route('dashboard') }}" class="flex flex-row items-center mb-4">
            <x-logo class="w-12 mr-4"></x-logo>
            <h2 class="text-xl font-bold dark:text-white">Groceries</h2>
        </a>
        {{ $slot }}
    </div>
</div>
