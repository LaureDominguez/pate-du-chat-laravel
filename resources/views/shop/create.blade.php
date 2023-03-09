<x-app-layout>
    <x-slot name="header">
        <h2>{{ __('Nouveau produit') }}</h2>
    </x-slot>

    <x-slot name="main">
        @if (session('status'))
            <div>
                {{session('status')}}
            </div>
        @endif

        <!-- if validation in the controller fails, show the errors -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif

        <form name="shopping.new" id="shopping-new" action="{{route('shopping.new')}}" method="POST">
            @csrf
            <label for="title">Titre</label>
            <input type="text" name="title" required>

            <label for="content">Description</label>
            <input type="text" name="content" required>

            <label for="price">Prix</label>
            <input type="number" name="price" required>

            <label for="image">image</label>
            <input type="file" name="image">

            <button type="submit" class="btn">créer</button>
        </form>
    </x-slot>

</x-app-layout>