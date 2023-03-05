<x-app-layout>
    <x-slot name="header">
        <h1>{{ __('Nos produits') }}</h1>
    </x-slot>

    <x-slot name="main">
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
        <a href="{{ route('shopping.form') }}" class="btn" >Ajouter un produit</a>
    </x-slot>

</x-app-layout>