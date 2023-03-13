<x-app-layout>
    <x-slot name="head">
        
        @vite(['ressources/css/shop.css'])
    </x-slot>
    <x-slot name="header">
        <h1>{{ __('Nos produits') }}</h1>
    </x-slot>

    <x-slot name="main">
        <div class="container">
            <div class="admin">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss='alert'>x</button>
                        <strong>{{$message}}</strong>
                    </div>
                @endif
                <a href="{{ route('shopping.form') }}" class="btn" >Ajouter un produit</a>
            </div>

            <section class="shop-view">
                @foreach ($products as $product)
                    <article class="acticle-view">
                        <img src="/images/{{$product->image}}" alt="">
                        <div>
                            <h5>{{$product->title}}</h5>
                            <p>{{$product->content}}</p>
                            <p>{{$product->price}}€</p>
                            <a href="{{route('shopping.show', $product->id)}}" class="btn">voir plus</a>
                        </div>
                    </article>
                @endforeach
            </section>
        </div>
    </x-slot>

</x-app-layout>