<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fiche produit') }}
        </h2>
    </x-slot>

    <x-slot name="shop">
        <h1>{{$article->title}}</h1>
        <p>{{$article->content}}</p>
    </x-slot>

</x-app-layout>