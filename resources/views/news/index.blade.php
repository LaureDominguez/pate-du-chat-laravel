<x-app-layout>
    <x-slot name="head">
        <x-head.ckeditor-config/>
    </x-slot>
    <x-slot name="header">
        <h1>{{ __('Nos actus') }}</h1>
    </x-slot>

    <x-slot name="main">
        <div class="container">
            <section class="admin">
                <x-forms.ckeditor-editor/>
            </section>

            <section class="news">
                @foreach ($news as $actu)
                    <article class="editor">
                            {!!$actu->message!!}
                            <div class="timestamp">
                                <p class="date">Créé le {{$actu->created_at->format('d/m/Y')}}</p>
                                @if ($actu->created_at != $actu->updated_at)
                                    <p class="date">Modifié le {{$actu->updated_at->format('d/m/Y')}}</p>
                                @endif
                            </div>
                    </article>
                @endforeach
            </section>
        </div>
    </x-slot>

</x-app-layout>