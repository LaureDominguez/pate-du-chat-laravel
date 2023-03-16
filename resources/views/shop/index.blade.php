<x-app-layout>
    <x-slot name="head">
        
        @vite(['ressources/css/shop.css'])
    </x-slot>
    <x-slot name="header">
        <h1>{{ __('Nos produits') }}</h1>
    </x-slot>

    <x-slot name="main">
        <div class="container">
            <x-slot name="admin">
                <section class="admin">
                    @if ($message = Session::get('success'))
                        <p>{{$message}}</p>
                    @endif
                    <a href="{{ route('shopping.form') }}" class="btn" >Ajouter un produit</a>
                </section>
            </x-slot>

            <section class="shop-view">
                @foreach ($products as $product)
                    <figure class="shop-tuile">
                        <a href="{{route('shopping.show', $product->id)}}">
                            @if ($product->image)
                                <img src="/images/{{$product->image}}" alt="">
                                @else
                                <img src="/images/logo.png" alt="">
                            @endif
                            <figcaption>
                                <h5>{{$product->title}}</h5>
                                <p>{{$product->content}}</p>
                                <p>{{$product->price}}€</p>
                                <p class="btn">Voir plus</p>
                            </figcaption>
                        </a>

                        @if (Auth::user() && Auth::user()->is_admin)
                            <div class="croix">
                                <form action="{{url('product',$product->id)}}" method="POST">
                                    <input type="hidden" name="_method" value="delete">
                                    {!! csrf_field() !!}
                                    <button class="croix-btn" type="submit" onclick="return confirm('Voulez-vous continuer ?')">x</button>
                                </form>
                            </div>
                        @endif
                    </figure>
                @endforeach
            </section>
        </div>
    </x-slot>

</x-app-layout>