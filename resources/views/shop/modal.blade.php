<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nouveau produit') }}
        </h2>
    </x-slot>

    <x-slot name="shop">
        <form action="" method="POST">
            <label for="title">Titre</label>
            <input type="string" name="title">

            <label for="content">Description</label>
            <input type="text" name="content">

            <label for="price">Prix</label>
            <input type="number" name="price">
        </form>
    </x-slot>

</x-app-layout>