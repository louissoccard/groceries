<x-guest-layout>
    <x-slot name="title">Sign In</x-slot>
    <x-auth-card>
        <form method="POST" action="{{ route('sign-in') }}">
        @csrf

        <!-- Email Address -->
            <div>
                <x-label for="email">Email</x-label>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                         autofocus></x-input>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password">Password</x-label>

                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="current-password"></x-input>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')"></x-auth-session-status>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors"></x-auth-validation-errors>


            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                           class="dark:bg-grey-700 border-grey-300 dark:border-grey-600 text-yellow shadow-sm focus:border-violet focus:ring focus:ring-violet focus:ring-opacity-50"
                           name="remember">
                    <span class="ml-2 text-sm text-grey-600 dark:text-grey-200">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                       href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif

                <x-button class="ml-3">Sign In</x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
