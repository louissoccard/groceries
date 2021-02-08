@props(['errors'])

@if ($errors->any())
    <div {{ $attributes->merge(['class' => 'bg-red mt-3 pb-3 px-4']) }}>
        <ul class="pt-3 list-inside text-white">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
