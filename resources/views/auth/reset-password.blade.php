<x-guest-layout>
    <x-slot name="title">Reset Password</x-slot>
    <x-auth-card>
        <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email">Email</x-label>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                         :value="old('email', $request->email)" required autofocus></x-input>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password">Password</x-label>

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required></x-input>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation">Confirm Password</x-label>

                <x-input id="password_confirmation" class="block mt-1 w-full"
                         type="password"
                         name="password_confirmation" required></x-input>
            </div>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors"></x-auth-validation-errors>

            <div class="flex items-center justify-end mt-4">
                <x-button>Reset Password</x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
