<x-app-layout>
    <x-slot name="header">
        <h2>{{ __('Boutique') }}</h2>
    </x-slot>

<<<<<<< HEAD
    <x-slot name="shop" class="shop-view">
        <h1>Nos articles</h1>
        <div class="container-shop-view">
            @foreach ($products as $product)
                <article class="acticle-view">
                    <img src="" alt="">
                    <div>
                        <h5>{{$product->title}}</h5>
                        <p class="short">{{$product->content}}</p>
                        <a href="{{$product->id}}" class="btn">voir plus</a>
                    </div>
                </article>
            @endforeach
        </div>
        <button class="btn" action="{{ route('shop.create') }}">Ajouter un produit</button>
=======
    <x-slot name="main">
        <h1>Nos articles</h1>
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        <div class="container-shop-view">
            @foreach ($products as $product)
                <article class="acticle-view">
                    <img src="{{$product->image}}" alt="">
                    <div>
                        <h5>{{$product->title}}</h5>
                        <p>{{$product->content}}</p>
                        <p>{{$product->price}}€</p>
                        <a href="{{route('shopping.show', $product->id)}}" class="btn">voir plus</a>
                    </div>
                </article>
            @endforeach
            </div>
        <a href="{{ route('shopping.form') }}" class="btn" >ajouter un produit</a>
>>>>>>> nav
    </x-slot>

</x-app-layout>