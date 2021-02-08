@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-grey-700 dark:text-grey-200']) }}>
    {{ $value ?? $slot }}
</label>
