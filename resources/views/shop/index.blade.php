@extends('layouts.app')

@section('admin')
<section class="admin">
    @if ($message = Session::get('success'))
        <p>{{$message}}</p>
    @endif
    <a href="{{ route('shopping.form') }}" class="btn" >Ajouter un produit</a>
</section>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nos produits') }}</div>
                    
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
        </div>
    </div>
</div>
@endsection