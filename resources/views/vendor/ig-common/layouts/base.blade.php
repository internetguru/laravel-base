@props([
    'view',
    'prefix' => 'ig-common::',
    'props' => [],
    'title' => null,
    'description' => null,
])

@php
    $title = $title ?? __("${prefix}layouts.$view.title");
    $description = $description ?? __("${prefix}layouts.$view.description");
@endphp

<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <x-slot:description>
        {{ $description }}
    </x-slot:description>

    @include("${prefix}$view", $props)

</x-app>
