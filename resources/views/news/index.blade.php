<x-app-layout>
    <x-slot name="head">
        <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    </x-slot>
    <x-slot name="header">
        <h1>{{ __('Nos actus') }}</h1>
    </x-slot>

    <x-slot name="main">
        <div class="container">
            <section class="news">
                @foreach ($news as $actu)
                    <article class="news-view">
                        {{-- <img src="{{$product->image}}" alt=""> --}}
                        <div>
                            {{-- <h5>{{$product->title}}</h5> --}}
                            <p>{{$actu->message}}</p>
                        </div>
                    </article>
                @endforeach
            </section>

            <section class="admin">

                <form method="POST" action="{{ route('news.store')}}">
                    @csrf
                    <textarea name="message" id="message" cols="50" rows="20">
                        {{old('message')}}
                    </textarea>
                    <button class="btn" type="{{ route('news.store') }}">Envoyer</button>
                </form>

                <script>
                    ClassicEditor
                        .create( document.querySelector( '#message' ) )
                        .then( message => {
                            console.log(message);
                        })
                        .catch( error => {
                            console.error( error );
                        } );
                </script>

            </section>

        </div>
    </x-slot>

</x-app-layout>