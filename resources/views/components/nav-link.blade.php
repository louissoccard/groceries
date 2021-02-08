@props(['icon', 'active'])

@php
    $activeClass = '';
    if ($active) {
        $activeClass = 'text-black dark:text-white border-yellow font-bold';
    } else {
        $activeClass = 'text-grey-500 dark:text-grey-400 hover:text-black dark:hover:text-white border-transparent';
    }
@endphp

<a {{ $attributes->merge(['class' => "block py-3 px-6 border-l-4 $activeClass"]) }}>
    <x-icon class="inline align-middle" size="16">{{ $icon }}</x-icon>
    <span class="inline align-middle ml-1 md:text-lg">{{ $slot }}</span>
</a>
