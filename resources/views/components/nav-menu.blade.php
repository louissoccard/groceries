<div {{ $attributes->merge(['class' => 'w-full']) }}>
    <x-nav-link href="{{ route('dashboard') }}" active="{{ Route::is('dashboard') }}" icon="layout">Dashboard
    </x-nav-link>
    <x-nav-link href="#" active="{{ Route::is('') }}" icon="shopping-bag">Products</x-nav-link>
    <x-nav-link href="#" active="{{ Route::is('') }}" icon="shopping-cart">Shopping List</x-nav-link>
    <x-nav-link href="#" active="{{ Route::is('') }}" icon="settings">Settings</x-nav-link>
</div>
