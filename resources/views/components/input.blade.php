@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'focus:outline-none focus:ring-0 outline-none border-0 border-b border-gray-200 text-xs text-gray-800 placeholder:text-gray-400']) !!}>
