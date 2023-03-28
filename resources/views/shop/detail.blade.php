@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detail') }}</div>

            @section('admin')
            <div class="admin">
                <form action="{{url('product',$product->id)}}" method="POST">
                    <input type="hidden" name="_method" value="delete">
                    {!! csrf_field() !!}
                    <button type="submit" class="btn">supprimer</button>
                </form>
            </div>
            @endsection
        <h1>Titre : {{$product->title}}</h1>
        <p>description : {{$product->content}}</p>
        <p>prix : {{$product->price}}€</p>
        <p>image : 
            <img src="{{asset($product->image ?? 
        '/storage/app/public/image-regular.svg')}}" alt="" srcset="">    
        </p>
            </div></div></div></div>

@endsection