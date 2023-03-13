<x-app-layout>
    <x-slot name="header">
        <h2>{{ __('Détail') }}</h2>
    </x-slot>

    <x-slot name="main">
        <h1>Titre : {{$product->title}}</h1>
        <p>description : {{$product->content}}</p>
        <p>prix : {{$product->price}}€</p>
        <p>image : 
            <img src="{{asset($product->image ?? 
        '/storage/app/public/image-regular.svg')}}" alt="" srcset="">    
        </p>
        <div class="admin">
            <form action="{{url('product',$product->id)}}" method="POST">
                <input type="hidden" name="_method" value="delete">
                {!! csrf_field() !!}
                <button type="submit" class="btn">
                    supprimer
                </button>
            </form>
        </div>
    </x-slot>

</x-app-layout>