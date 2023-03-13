<x-app-layout>
    <x-slot name="header">
        <h1>{{ __('Gallerie') }}</h1>
    </x-slot>

    <x-slot name="main">
        <form action="{{url('image-gallery')}}" method="POST" enctype="multipart/form-data">
            {!!csrf_field()!!}

            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <strong>Oups</strong> Quelque-chose s'est mal passé...<br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss='alert'>x</button>
                    <strong>{{$message}}</strong>
                </div>
            @endif

            <div class="row">
                <div class="col-md-5">
                    <label for="title">Titre</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="col-md-5">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-success">Ajouter</button>
                </div>
            </div>
        </form>

        <div>
            @if ($images->count())
                @foreach ($images as $image)
                    <div>
                        {{-- <a href="/images/{{ $image->image }}"> --}}
                            <figure class="article-view">
                                <img alt="{{ $image->title }}" src="/images/{{ $image->image }}" class="image" />
                                <figcaption>{{ $image->title }}</figcaption>
                            </figure>
                        {{-- </a> --}}
                        <form action="{{ url('image-gallery',$image->id) }}" method="POST">
                            <input type="hidden" name="_method" value="delete">
                            {!! csrf_field() !!}
                            <button type="submit" class="close-icon btn btn-danger">supprimer<i class="glyphicon glyphicon-remove"></i></button>
                        </form>
                    </div>
                @endforeach
            @endif
        </div>
    </x-slot>

</x-app-layout>