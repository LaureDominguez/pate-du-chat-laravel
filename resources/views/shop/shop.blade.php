<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Boutique') }}
        </h2>
    </x-slot>

    <x-slot name="shop" class="shop-view">
        <h1>Nos articles</h1>
        <div class="container-shop-view">
            @foreach ($products as $product)
                <article class="acticle-view">
                    <img src="" alt="">
                    <div>
                        <h5>{{$product->title}}</h5>
                        <p class="short">{{$product->content}}</p>
                        <a href="{{$product->id}}" class="btn">bouton</a>
                    </div>
                </article>
            @endforeach
        </div>
        <button class="btn">Ajouter un produit</button>
    </x-slot>

</x-app-layout>