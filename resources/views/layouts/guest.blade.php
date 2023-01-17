<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth h-full antialiased">

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
      <title>Welcome dude</title>
      @vite(['resources/css/app.css', 'resources/js/app.js'])
      @livewireStyles
   </head>

   <body class="dark:bg-zinc-900 lg:px-52 md:px-24 container px-4 font-sans bg-white">
      <div>
         <livewire:navbar.navbar />
      </div>
      <main>
         {{ $slot }}
      </main>
      <hr class="border-zinc-200 dark:border-zinc-700/50" />
      <livewire:footer.footer />
      @livewireScripts
   </body>

</html>