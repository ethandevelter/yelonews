@props(['post'])

<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <a href="{{$post->slug}}">
        <div>
            <img class="w-full rounded-xl"
                src="{{ $post->image }}">
        </div>
    </a>
    <div class="mt-3">
        <a href=""></a>
        <div class="flex items-center mb-2">
            <a href="http://127.0.0.1:8000/blog/fil3tutorial"></a>
            <p class="text-gray-500 text-sm">{{ $post->published_at }}</p>
        </div>
        <a class="text-xl font-bold text-gray-900">{{ $post->title }}</a>
    </div>
</div>