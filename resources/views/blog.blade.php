@props(['blog'])
<x-app-layout>
    <div class="bg-white h-screen w-full">
        <x-container>
            @foreach ($users as $user)
            <div class="flex flex-col">
                <a>{{$user->name}}</a>
                <a>{{$user->email}}</a>
                <a>test of dit werkt</a>
            </div>
            @endforeach
        </x-container>
    </div>
</x-app-layout>