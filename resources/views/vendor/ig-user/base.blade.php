@props([
    'view',
    'props' => [],
])

<x-app>

    <x-slot:title>
        @lang("ig-user::layouts.$view.title")
    </x-slot>

    <x-slot:description>
        @lang("ig-user::layouts.$view.description")
    </x-slot>

    {{--
    @php
        // Disable sort for users.index view
        if ($view == 'users.index') {
            $props['enableSort'] = false;
        }
    @endphp
    --}}

    @include("ig-user::$view", $props)

</x-app>
