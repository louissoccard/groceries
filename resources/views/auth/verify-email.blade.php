<x-guest-layout>
    <x-slot name="title">Verify Email</x-slot>
    <x-auth-card>

        <div class="mb-4 text-sm">
            Thanks for signing up! Before getting started, could you verify your email address by clicking on the link
            we just emailed to you? If you didn't receive the email, we will gladly send you another.
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="p-4 mb-4 font-medium text-sm bg-green text-white">A new verification link has been sent to the
                                                                          email
                                                                          address you provided during registration.
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>Resend Verification Email</x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('sign-out') }}">
                @csrf

                <button type="submit" class="underline text-sm text-red hover:text-black dark:hover:text-white ml-4">Sign Out</button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
