<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ config('app.name', 'Laravel') }}</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
   @livewireStyles
</head>

<body class="bg-gray-100 font-sans antialiased dark:bg-zinc-800">
   <x-jet-banner />
   <div class="min-h-screen bg-gray-100 dark:bg-zinc-800">
      @livewire('navigation-menu')
      @if (isset($header))
         <header class="bg-white shadow dark:bg-black">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
               {{ $header }}
            </div>
         </header>
      @endif
      <main>
         {{ $slot }}
      </main>
   </div>
   @stack('modals')
   @livewireScripts
</body>

</html>
