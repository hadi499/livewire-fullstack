<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script> -->
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

  @vite('resources/css/app.css')

  <title>{{ $title ?? 'Dashboard Admin' }}</title>
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

<body>
  <!-- resources/views/livewire/dashboard.blade.php -->
  <div class="min-h-screen flex flex-col bg-blue-50">
    <!-- Header -->
    <header class="bg-white shadow-md flex">
      <div class="max-w-7xl    sm:px-6 lg:px-8 flex items-center">
        <img src="{{asset('images/bird.jpg')}}" class="w-16 h-16 pb-3" alt="logo">
        <span class="text-lg font-play font-bold text-blue-800">Dashboard</span>
      </div>
      <div class="flex items-center gap-2 ml-auto py-2 pr-12">
        <img src="{{ Auth::user()->avatar_url }}" alt="" class="w-10 h-10 rounded-full object-cover">
        <span class="text-xl font-semibold">{{ Auth::user()->name }}</span>
      </div>
    </header>

    <x-message-success />

    <!-- Main content area -->
    <div class="flex-1 flex overflow-hidden ">
      <!-- Sidebar -->
      <aside class="bg-white w-10 md:w-48 max-w-xs border-r border-blue-200 flex-shrink-0 ">
        <div class="h-full flex  md:ml-6">
          <!-- Sidebar items -->
          <x-navbar-admin />
        </div>
      </aside>

      <main class="flex-1 p-6 md:px-20 overflow-auto">
        {{ $slot }}

      </main>


    </div>
  </div>

  <x-notifikasi />



  <script type=" text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js">
  </script>

</body>

</html>