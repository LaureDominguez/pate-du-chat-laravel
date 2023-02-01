<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Boutique') }}
        </h2>
    </x-slot>

    <x-slot name="shop">
        <h1>Nos articles</h1>
        <ul>
            @foreach ($articles as $article)
                <article>
                    <img src="" alt="">
                    <div>
                        <h5>{{$article->title}}</h5>
                        <p>{{$article->content}}</p>
                        <a href="{{$article->id}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </article>
            @endforeach
        </ul>
    </x-slot>

</x-app-layout>