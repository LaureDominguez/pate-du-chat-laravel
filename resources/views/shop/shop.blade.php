<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Boutique') }}
        </h2>
    </x-slot>

    <x-slot name="shop" class="shop-view">
        <h1>Nos articles</h1>
        <div class="container-shop-view">
            @foreach ($articles as $article)
                <article class="acticle-view">
                    <img src="" alt="">
                    <div>
                        <h5>{{$article->title}}</h5>
                        <p class="short">{{$article->content}}</p>
                        <a href="{{$article->id}}" class="btn">bouton</a>
                    </div>
                </article>
            @endforeach
            </div>
    </x-slot>

</x-app-layout>