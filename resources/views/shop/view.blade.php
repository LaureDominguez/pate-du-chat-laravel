<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Détail') }}
        </h2>
    </x-slot>

    <x-slot name="shop">
        <h1>Titre : {{$product->title}}</h1>
        <p>description : {{$product->content}}</p>
    </x-slot>

</x-app-layout>