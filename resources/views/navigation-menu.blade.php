<nav x-data="{ open: false }" class="border-b border-gray-100 bg-white dark:bg-black">
   <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-20">
      <div class="flex h-16 justify-between items-center">
         <div class="flex items-center">
            <div class="-mr-2 flex items-center sm:hidden">
               <button @click="open = ! open"
                class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none">
                  <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                     <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                     <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
               </button>
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:items-center">
               <div class="relative ml-3">
                  <x-jet-dropdown align="right" width="48">
                     <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <button class="flex rounded-full border-2 border-transparent text-sm transition focus:border-gray-300 focus:outline-none">
                           <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
                        @else
                        <span class="inline-flex rounded-md">
                           <button type="button"
                            class="inline-flex items-center rounded-md border border-transparent bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition hover:text-gray-700 focus:outline-none">
                              {{ Auth::user()->name }}
                              <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                 <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd" />
                              </svg>
                           </button>
                        </span>
                        @endif

                     </x-slot>

                     <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                           {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                           {{ __('Profile') }}
                        </x-jet-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                           {{ __('API Tokens') }}
                        </x-jet-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                           @csrf

                           <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                              {{ __('Log Out') }}
                           </x-jet-dropdown-link>
                        </form>
                     </x-slot>
                  </x-jet-dropdown>
               </div>
            </div>
         </div>
         <div class="hidden space-x-8 sm:flex items-center">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
               {{ __('Dashboard') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="" :active="request()->routeIs('')">
               {{ __('Article') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="" :active="request()->routeIs('')">
               {{ __('Catagory') }}
            </x-jet-nav-link>
         </div>
         <div class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-current">
               <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
            </svg>
            <div class="">
               <div class="dark">
                  <button class="px-2 py-2 text-zinc-100 dark:text-zinc-500">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 fill-current">
                        <path stroke-linecap="round" stroke-linejoin="round"
                         d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                     </svg>
                  </button>
               </div>
               <div class="light">
                  <button class="px-2 py-2 text-zinc-50 hover:text-zinc-200 dark:text-zinc-300">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 fill-current">
                        <path stroke-linecap="round" stroke-linejoin="round"
                         d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                     </svg>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Responsive Navigation Menu -->
   <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
      <div class="space-y-1 pt-2 pb-3">
         <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
         </x-jet-responsive-nav-link>
      </div>

      <!-- Responsive Settings Options -->
      <div class="border-t border-gray-200 pt-4 pb-1">
         <div class="flex items-center px-4">
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div class="mr-3 shrink-0">
               <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
            </div>
            @endif

            <div>
               <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
               <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
            </div>
         </div>

         <div class="mt-3 space-y-1">
            <!-- Account Management -->
            <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
               {{ __('Profile') }}
            </x-jet-responsive-nav-link>

            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
            <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
               {{ __('API Tokens') }}
            </x-jet-responsive-nav-link>
            @endif

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}" x-data>
               @csrf

               <x-jet-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                  {{ __('Log Out') }}
               </x-jet-responsive-nav-link>
            </form>

            <!-- Team Management -->
            @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
            <div class="border-t border-gray-200"></div>

            <div class="block px-4 py-2 text-xs text-gray-400">
               {{ __('Manage Team') }}
            </div>

            <!-- Team Settings -->
            <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
               {{ __('Team Settings') }}
            </x-jet-responsive-nav-link>

            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
            <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
               {{ __('Create New Team') }}
            </x-jet-responsive-nav-link>
            @endcan

            <div class="border-t border-gray-200"></div>

            <!-- Team Switcher -->
            <div class="block px-4 py-2 text-xs text-gray-400">
               {{ __('Switch Teams') }}
            </div>

            @foreach (Auth::user()->allTeams() as $team)
            <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
            @endforeach
            @endif
         </div>
      </div>
   </div>
</nav>