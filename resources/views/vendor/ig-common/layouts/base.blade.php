@props([
    'view',
    'prefix' => 'ig-common::',
    'props' => [],
])

<x-app>

    <x-slot:title>
        @lang("${prefix}layouts.$view.title")
    </x-slot:title>

    <x-slot:description>
        @lang("${prefix}layouts.$view.description")
    </x-slot:description>

    @include("${prefix}$view", $props)

</x-app>
