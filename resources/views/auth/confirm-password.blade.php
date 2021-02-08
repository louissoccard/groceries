<x-guest-layout>
    <x-slot name="title">Confirm Password</x-slot>
    <x-auth-card>
        <div class="mb-4 text-sm">
            This is a secure area of the application. Please confirm your password before continuing.
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
            <div>
                <x-label for="password">Password</x-label>

                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="current-password"></x-input>
            </div>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors"></x-auth-validation-errors>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
