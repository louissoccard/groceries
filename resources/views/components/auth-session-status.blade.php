@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-white bg-violet p-4']) }}>
        {{ $status }}
    </div>
@endif
