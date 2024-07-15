<div class="w-full h-screen flex items-center justify-center bg-gradient-darkest-to-darker p-hero">
    <div class="text-center">
        <img class="h-30pr !mb-14 block m-auto" src="{{ asset('/public/assets/AdelaceRounded.svg') }}" alt="Pipuer Icon">
        <h1 class="text-lg font-thin text-white opacity-40">Keep your posts updated</h1>
        <a class="text-xs font-black text-white opacity-40 border-t border-b border-white py-2 px-20 hover:bg-g-dark hover:text-white hover:opacity-100 duration-300 p-hero-action !absolute !bottom-5 !left-0 !right-0 !m-auto !w-fit">Upcoming</a>
</div>
</div>
<div class="hidden opacity-0">
    <x-app-layout>
    </x-app-layout>
</div>
{{--<x-app-layout>
    @section('hero')
    <div class="w-full text-center py-32">
        <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
            Welcome to <span class="text-yellow-500">&lt;YELO&gt;</span> <span class="text-gray-900"> News</span>
        </h1>
        <p class="text-gray-500 text-lg mt-1">Best Blog in the universe</p>
        <a class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block"
            href="http://127.0.0.1:8000/blog">Start
            Reading</a>
    </div>
    @endsection
    <div class="mb-10 w-full">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Featured Posts</h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach($featuredPosts as $post)
                        <div class="md:col-span-1 col-span-3">
                            <x-posts.postcard :post="$post"></x-posts.postcard>
                        </div>
                    @endforeach
                </div>
            </div>
            <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
                href="http://127.0.0.1:8000/blog">More
                Posts</a>
        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Latest Posts</h2>
        <div class="w-full">
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach($latestPosts as $post)
                    <div class="md:col-span-1 col-span-3">
                        <x-posts.postcard :post="$post"></x-posts.postcard>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="w-full mb-5">
            
        </div>
        <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
            href="http://127.0.0.1:8000/blog">More
            Posts
        </a>
        <div class="w-full">
            @foreach ($users as $user)
                {{$user}}
            @endforeach
        </div>
    </div>
</x-app-layout>--}}
