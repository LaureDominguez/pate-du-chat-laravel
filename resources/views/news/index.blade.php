<x-app-layout>
    <x-slot name="head">
        <x-head.ckeditor-config/>
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
                            {{-- <h5>{{$product->title}}</h5> --}}
                            {{$actu->message}}
                    </article>
                @endforeach
            </section>

            <section class="admin">
                <x-forms.ckeditor-editor/>
            </section>
        </div>
    </x-slot>

</x-app-layout>