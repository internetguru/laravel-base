<!DOCTYPE html>
<html lang="{{ app()->currentLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="generator" content="{{ Helpers::getAppInfo() }}"/>
        <meta name="csrf_token" content="{{ csrf_token() }}"/>
        <title>{{ $headTitle ?? Helpers::createTitle() }}</title>

        {!! $styles ?? '' !!}
        {!! RecaptchaV3::initJs() !!}
        @livewireStyles
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <x-header :$title :breadcrumb="$breadcrumb ?? null"/>

        <main class="container-fluid">
            @if (isset($title) && isset($description))
                <section class="section section-top">
                    <div class="title">
                        <h1 class="display-5">{{ $title }}</h1>
                        <p class="lead">{{ $description }}</p>
                    </div>
                </section>
            @endif
            {{ $slot }}

            <x-ig::messages />
        </main>

        <x-footer/>

        {!! $scripts ?? '' !!}
        @livewireScriptConfig
    </body>
</html>
