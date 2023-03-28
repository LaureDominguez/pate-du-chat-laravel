@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nouveau produit') }}</div>

        {{-- @if (session('status'))
            <div>
                {{session('status')}}
            </div>
        @endif --}}

        <!-- if validation in the controller fails, show the errors -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif

        <form name="shopping.new" id="shopping-new" action="{{route('shopping.new')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title">Titre</label>
            <input type="text" name="title" required>

            <label for="content">Description</label>
            <input type="text" name="content" required>

            <label for="price">Prix</label>
            <input type="decimal" name="price" required>

            <label for="image">image</label>
            <input type="file" name="image">

            <button type="submit" class="btn">créer</button>
        </form>

            </div></div></div></div>
            @endsection