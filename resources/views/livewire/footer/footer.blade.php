<div>
    <footer class="justify-items-center sm:flex-row md:py-10 flex flex-col items-center justify-between py-6" data-aos="fade-up" data-aos-duration="900">
        <span class="font-md text-zinc-800 dark:text-zinc-100 sm:text-center block text-sm text-center"><span class="font-semibold">© {{date(' Y') }} {{__('Burhanuddin.')}} </span>{{__('All Rights Reserved.')}}</span>
        <div class="md:flex hidden space-x-4">
            <a class="transition-color duratio-300 text-smgray-700 text-zinc-800 hover:font-medium dark:text-zinc-200 text-sm transform" href="{{route('welcome')}}">{{__('Home')}}</a>
            <a class="transition-color duratio-300 text-smgray-700 text-zinc-800 hover:font-medium dark:text-zinc-200 text-sm transform" href="{{route('about')}}">{{__('About')}}</a>
            <a class="transition-color duratio-300 text-smgray-700 text-zinc-800 hover:font-medium dark:text-zinc-200 text-sm transform" href="{{route('project')}}">{{__('Project')}}</a>
            <a class="transition-color duratio-300 text-smgray-700 text-zinc-800 hover:font-medium dark:text-zinc-200 text-sm transform" href="{{route('article')}}">{{__('Article')}}</a>
        </div>
    </footer>
</div>