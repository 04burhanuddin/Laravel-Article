<div>
    <div class="lg:-mx-4 my-10 -mx-4">
        <div class="lg:grid-cols-3 lg:gap-4 justify-items-center md:grid-cols-2 lg:w-auto grid grid-cols-1 gap-5">
            @foreach ($article as $artikel)
            <article class="hover:cursor-pointer hover:bg-zinc-50 hover:opacity-100 dark:hover:bg-zinc-700/50 md:rounded-xl transition duration-700 ease-in-out">
                <div class="p-5">
                    <span class="text-zinc-400 dark:text-zinc-500 mb-3 text-sm">{{$artikel->created_at->diffForHumans()}}</span>
                    <h2 class="text-zinc-800 dark:text-zinc-200 py-3 text-base font-semibold tracking-tight">{{$artikel->title}}</h2>
                    <p class="text-zinc-600 dark:text-zinc-400 text-sm leading-relaxed">{{ Str::limit($artikel->excerpt, 300)}}</p>
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
</div>