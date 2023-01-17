<!DOCTYPE html>
<html lang="en">

   <head>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Ngapain dude</title>
      @vite(['resources/css/app.css', 'resources/js/app.js'])
      <title>Document</title>
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
   </head>

   <body class="antialiased font-sans bg-zinc-800">
      <x-jet-authentication-card>
         <x-slot name="logo">
            {{--
            <x-jet-authentication-card-logo /> --}}
            <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_e1pmabgl.json" mode="bounce" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
         </x-slot>

         <x-jet-validation-errors class="mb-4" />

         @if (session('status'))
         <div class="mb-4 text-sm font-medium text-green-600">
            {{ session('status') }}
         </div>
         @endif

         <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
               <x-jet-label for="email" value="{{ __('Email') }}" />
               <x-jet-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
               <x-jet-label for="password" value="{{ __('Password') }}" />
               <x-jet-input id="password" class="mt-1 block w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="mt-4 block">
               <label for="remember_me" class="flex items-center">
                  <x-jet-checkbox id="remember_me" name="remember" />
                  <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
               </label>
            </div>

            <div class="mt-4 flex items-center justify-end">
               @if (Route::has('password.request'))
               <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                  {{ __('Forgot your password?') }}
               </a>
               @endif

               <x-jet-button class="ml-4">
                  {{ __('Log in') }}
               </x-jet-button>
            </div>
         </form>
      </x-jet-authentication-card>
   </body>

</html>