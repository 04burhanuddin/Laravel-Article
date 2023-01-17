<div>
    <nav x-data="{ isOpen: false }" class="flex items-end space-x-0.5 pt-6 md:items-center justify-between">
        <div>
            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100' : 'opacity-0 -translate-x-full']" class="dark:bg-zinc-800 md:relative md:top-0 md:mt-0 md:flex md:w-auto md:translate-x-0 md:items-center md:bg-transparent md:p-0 md:opacity-100 md:shadow-none md:dark:bg-transparent absolute inset-x-0 z-20 w-full py-4 mt-10 transition duration-300 ease-in-out bg-white">
                <div class="lg:-px-8 lg:mt-0 md:flex-row md:space-y-0 md:space-x-8 flex flex-col space-y-4">
                    <a href="{{ route('welcome') }}" class="{{ request()->is('/')  ? ' transition-color transform text-lg tracking-tight text-zinc-800 duration-300 font-medium underline underline-offset-8 dark:text-white divide-x-2':'hover:text-zinc-800 transition-color transform text-lg tracking-tight text-zinc-400 duration-300 hover:font-medium dark:text-white' }}">{{__('Home')}}</a>
                    <a href="{{ route('about') }}" class="{{ request()->is('about')  ? 'transition-color transform text-lg tracking-tight text-zinc-800 duration-300 font-medium underline underline-offset-8 dark:text-white':'hover:text-zinc-800 transition-color transform text-lg tracking-tight text-zinc-400 duration-300 hover:font-medium dark:text-white' }}">{{__('About')}}</a>
                    <a href="{{ route('project') }}" class="{{ request()->is('project')  ? 'transition-color transform text-lg tracking-tight text-zinc-800 duration-300 font-medium underline underline-offset-8 dark:text-white':'hover:text-zinc-800 transition-color transform text-lg tracking- text-zinc-400 duration-300 hover:font-medium dark:text-white' }}">{{__('Projects')}}</a>
                    <a href="{{ route('article') }}" class="{{ request()->is('article')  ? 'transition-color transform text-lg tracking-tight text-zinc-800 duration-300 font-medium underline underline-offset-8 dark:text-white':'hover:text-zinc-800 transition-color transform text-lg tracking-tight text-zinc-400 duration-300 hover:font-medium dark:text-white' }}">{{__('Article')}}</a>
                </div>
            </div>
            <div class="md:hidden flex">
                <div class="bg-zinc-200/50 dark:bg-zinc-700/50 rounded-full">
                    <button x-cloak @click="isOpen = !isOpen" type="button" class="hover:text-gray-600 focus:text-gray-600 focus:outline-none dark:text-gray-200 dark:hover:text-gray-400 dark:focus:text-gray-400 px-2 py-2 text-gray-500" aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                        </svg>
                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="bg-zinc-200/50 dark:bg-zinc-700/50 rounded-full">
            <div class="dark">
                <button class="text-zinc-100 dark:text-zinc-500 px-2 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                    </svg>
                </button>
            </div>
            <div class="light">
                <button class="text-zinc-50 hover:text-zinc-200 dark:text-zinc-300 px-2 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>
</div>