<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nouveau produit') }}
        </h2>
    </x-slot>

    <x-slot name="shop">
        @if (session('status'))
            <div>
                {{session('status')}}
            </div>
        @endif

        <form name="shopping.new" id="shopping.new" action="{{route('shopping.new')}}" method="POST">
            @csrf
            <label for="title">Titre</label>
            <input type="text" name="title" required>

            <label for="content">Description</label>
            <input type="text" name="content" required>

            <label for="price">Prix</label>
            <input type="number" name="price" required>

            <button type="submit" class="btn">créer</button>
        </form>
    </x-slot>

</x-app-layout>