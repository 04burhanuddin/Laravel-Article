<x-guest-layout>
    <div class="md:py-20 lg:py-32 py-16">
        <div class="max-w-3xl">
            <h1 class="text-zinc-800 dark:text-white lg:text-5xl md:text-4xl text-3xl font-black tracking-normal">Where the<br>world builds software.</h1>
            <p class="text-zinc-500 dark:text-zinc-300 md:py-4 md:text-base py-3 text-sm leading-relaxed">Lorem ipsum dolor sit amet consectetur elit. Autem, quia?</p>
        </div>
        <div class="flex flex-row item-center pt-5 md:space-x-6 space-x-4">
            <div class="flex flex-row space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 dark:stroke-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>
                <h3 class="dark:text-white font-semibold text-sm">30+ Articles</h3>
            </div>
            <div class="flex flex-row space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 dark:stroke-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                </svg>
                <h3 class="dark:text-white font-semibold text-sm">30+ Source Code</h3>
            </div>
        </div>
    </div>
    {{-- <div class="md:flex-row md:justify-between lg:flex-row lg:-mx-0 lg:-ml-4 flex flex-col mb-4 -mx-4">
        <div class="lg:w-2/3 w-full">
            <div class="md:w-full md:gap-3 flex flex-col max-w-2xl gap-2">
                @foreach ($article->take(3) as $artikel)
                <article class="hover:cursor-pointer hover:bg-zinc-50 hover:opacity-100 dark:hover:bg-zinc-700/50 md:rounded-xl transition duration-700 ease-in-out">
                    <div class="p-4">
                        <span class="text-zinc-400 dark:text-zinc-500 mb-3 text-sm">{{$artikel->created_at->diffForHumans()}}</span>
                        <h2 class="text-zinc-800 dark:text-zinc-200 py-3 text-base font-semibold tracking-tight">{{$artikel->title}}</h2>
                        <p class="text-zinc-600 dark:text-zinc-400 text-sm leading-relaxed">{{ Str::limit($artikel->excerpt, 400)}}</p>
                        <a href="{{$artikel->source_code}}">
                            <div class="md:text-sm relative z-10 flex items-center mt-4 text-xs font-medium text-yellow-600">
                                Read Artikel
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
        <div class="md:w-1/2 md:mt-0 lg:pl-20 w-full px-2 py-10">
            <div class="lg:gap-0 md:grid-cols-1 lg:grid-cols-1 grid grid-cols-1 gap-2">
                <div class="rounded-xl lg:dark:border-zinc-700/50 border-zinc-200 mt-5 border">
                    <div class="md:p-0 lg:p-4 p-4">
                        <div class="w-full max-w-lg" data-aos="fade-up" data-aos-duration="900">
                            <div>
                                <h1 class="dark:text-white text-lg font-medium text-gray-800">Mandar Trip</h1>
                                <div class="lg:md-3 flex flex-wrap items-center mt-2 space-x-1 space-y-1">
                                    <span class="px-1.5 py-0.5 text-xs text-blue-900 capitalize bg-green-300 rounded-full dark:bg-green-400 dark:text-blue-900">Web App</span>
                                    <span class="px-1.5 py-0.5 text-xs text-blue-800 capitalize bg-blue-200 rounded-full dark:bg-blue-300 dark:text-blue-900">Laravel</span>
                                    <span class="px-1.5 py-0.5 text-xs text-blue-800 capitalize bg-blue-200 rounded-full dark:bg-blue-300 dark:text-blue-900">Liveware</span>
                                    <span class="px-1 py-0.5 text-xs text-blue-800 capitalize bg-blue-200 rounded-full dark:bg-blue-300 dark:text-blue-900">Mysql</span>
                                    <span class="px-1 py-0.5 text-xs text-blue-800 capitalize bg-blue-200 rounded-full dark:bg-blue-300 dark:text-blue-900">Direction API</span>
                                </div>
                                <p class="dark:text-gray-300 mt-3 text-sm leading-relaxed text-gray-600">Sistem informasi pariwisata di kabupaten jepara. Sistem ini menampilakn
                                    informasi wisata berdasasrkan kategori, detail wisata dan direction menuju ke tempat wisata berdasarkan lokasi yang dipilih oleh user.
                                </p>
                            </div>
                            <div class=" py-1">
                                <div class="mt-2">
                                    <div class="flex items-center leading-tight">
                                        <a href="https://github.com/04burhanuddin/GIS-Wisata-Jepara.git">
                                            <div class="flex flex-row items-center">
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                                    </path>
                                                </svg>
                                                <p class="mx-1.5 text-sm font-medium text-gray-700 dark:text-gray-200">Source Code</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl lg:dark:border-zinc-700/50 border-zinc-200 mt-5 border">
                    <div class="md:p-0 lg:p-4 p-4">
                        <div class="w-full max-w-lg" data-aos="fade-up" data-aos-duration="900">
                            <div>
                                <h1 class="dark:text-white text-lg font-medium text-gray-800">Wisata Jepara.</h1>
                                <div class="lg:md-3 flex flex-wrap items-center mt-2 space-x-1 space-y-1">
                                    <span class="px-1.5 py-0.5 text-xs text-blue-900 capitalize bg-green-300 rounded-full dark:bg-green-400 dark:text-blue-900">Web App</span>
                                    <span class="px-1.5 py-0.5 text-xs text-blue-800 capitalize bg-blue-200 rounded-full dark:bg-blue-300 dark:text-blue-900">Laravel</span>
                                    <span class="px-1.5 py-0.5 text-xs text-blue-800 capitalize bg-blue-200 rounded-full dark:bg-blue-300 dark:text-blue-900">Liveware</span>
                                    <span class="px-1 py-0.5 text-xs text-blue-800 capitalize bg-blue-200 rounded-full dark:bg-blue-300 dark:text-blue-900">Mysql</span>
                                    <span class="px-1 py-0.5 text-xs text-blue-800 capitalize bg-blue-200 rounded-full dark:bg-blue-300 dark:text-blue-900">Direction API</span>
                                </div>
                                <p class="dark:text-gray-300 mt-3 text-sm leading-relaxed text-gray-600">Sistem informasi pariwisata di kabupaten jepara. Sistem ini menampilakn
                                    informasi wisata berdasasrkan kategori, detail wisata dan direction menuju ke tempat wisata berdasarkan lokasi yang dipilih oleh user.
                                </p>
                            </div>
                            <div class=" py-1">
                                <div class="mt-2">
                                    <div class="flex items-center leading-tight">
                                        <a href="https://github.com/04burhanuddin/GIS-Wisata-Jepara.git">
                                            <div class="flex flex-row items-center">
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                                    </path>
                                                </svg>
                                                <p class="mx-1.5 text-sm font-medium text-gray-700 dark:text-gray-200">Source Code</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</x-guest-layout>