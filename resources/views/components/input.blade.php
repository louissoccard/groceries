@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-none border-grey-300 dark:border-grey-700 dark:bg-grey-800 focus:border-yellow focus:ring focus:ring-yellow focus:ring-opacity-50']) !!}>
