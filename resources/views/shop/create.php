<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nouveau produit') }}
        </h2>
    </x-slot>

    <x-slot name="create">
        <h1>nouveau produit</h1>
        <form method="POST" action="{{ route('create') }}">
            <label for="title">Titre</label>
            <input type="text" name="title">


        </form>
    </x-slot>

</x-app-layout>