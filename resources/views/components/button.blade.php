@props(['colour' => 'yellow', 'textColour' => 'black', 'hoverTextColour' => 'black', 'darkHoverTextColour' => 'white'])

<button {{ $attributes->merge(['type' => 'submit', 'class' => "inline-flex items-center px-2 py-1 bg-yellow border-4 border-{$colour} font-bold text-{$textColour} hover:text-{$hoverTextColour} dark:hover:text-{$darkHoverTextColour} hover:bg-transparent focus:outline-none focus:ring ring-violet disabled:opacity-25 transition ease-in-out duration-150"]) }}>
    {{ $slot }}
</button>
