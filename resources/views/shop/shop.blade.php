<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Boutique') }}
        </h2>
    </x-slot>

    <x-slot name="shop">
        <h1>Nos articles</h1>
        <ul>
            @foreach ($products as $product)
                <article>
                    <img src="" alt="">
                    <div>
                        <h5>{{$product->title}}</h5>
                        <p>{{$product->content}}</p>
                        <a href="{{$product->id}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </article>
            @endforeach
        </ul>
        <button class="btn">ajouter un produit</button>
    </x-slot>

</x-app-layout>