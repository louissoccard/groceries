<x-guest-layout>
    <x-slot name="title">Forgot Password</x-slot>
    <x-auth-card>
        <div class="mb-4 text-sm">
            Enter your email address and we will email you a password reset
            link that will allow you to choose a new one.
        </div>

        <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
            <div>
                <x-label for="email">Email</x-label>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                         autofocus></x-input>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')"></x-auth-session-status>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors"></x-auth-validation-errors>

            <div class="flex items-center justify-end mt-4">
                <x-button>Email Password Reset Link</x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
