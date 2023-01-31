<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shop') }}
        </h2>
    </x-slot>

    <h1>Nos articles</h1>
    <ul>
        @foreach ($articles as $article)
            <li><a href="{{$article->id}}">{{$article->title}}</a></li>
        @endforeach
    </ul>
</x-app-layout>