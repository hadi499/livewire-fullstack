<!DOCTYPE html>
<html

    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    x-data="{isDarkMode: localStorage.getItem('dark') === 'true'}"
    x-init="$watch('isDarkMode', val =>localStorage.setItem('dark', val))"
    x-bind:class="{'dark': isDarkMode}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <!-- pikaday -->
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <script src="{{ asset('js/moment.js') }}"></script>

    <title>{{ $title ?? 'Page Title' }}</title>

    @vite('resources/css/app.css')

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }

        /* trix-toolbar [data-trix-button-group="block-tools"] {
            display: none;
        } */

        .trix-button--icon-increase-nesting-level {
            display: none !important;

        }

        .trix-button--icon-decrease-nesting-level {
            display: none !important;

        }

        .trix-button--icon-heading-1 {
            display: none !important;

        }

        .trix-button--icon-code {
            display: none !important;

        }
    </style>
</head>

<body class="dark:bg-slate-600 ">
    <x-navbar />
    <x-message-success />





    {{ $slot }}









</body>

</html>