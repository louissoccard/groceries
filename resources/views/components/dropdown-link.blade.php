@props(['bgHover' => 'grey-300', 'icon'])

@php
$darkModeBgHover = '';
if ($bgHover == 'grey-300') {
	$darkModeBgHover = 'dark:hover:bg-grey-600';
}
@endphp

<a {{ $attributes->merge(['class' => "block px-4 py-3 text-md text-black dark:text-white hover:bg-{$bgHover} $darkModeBgHover focus:outline-none focus:bg-yellow transition duration-150 ease-in-out"]) }}>
    <x-icon size="14" class="inline align-middle mr-2">{{ $icon }}</x-icon>
    <span class="inline align-middle">{{ $slot }}</span>
</a>
