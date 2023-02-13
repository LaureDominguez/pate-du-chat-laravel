<x-app-layout>
    <x-slot name="header">
        <h2>{{ __('Boutique') }}</h2>
    </x-slot>

    <x-slot name="shop">
        <h1>Nos articles</h1>
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        <div class="container-shop-view">
            @foreach ($products as $product)
                <article class="acticle-view">
                    <img src="" alt="">
                    <div>
                        <h5>{{$product->title}}</h5>
                        <p>{{$product->content}}</p>
                        <a href="{{route('shopping.show', $product->id)}}" class="btn">voir plus</a>
                    </div>
                </article>
            @endforeach
            </div>
        <a href="{{ route('shopping.form') }}" class="btn" >ajouter un produit</a>
    </x-slot>

</x-app-layout>