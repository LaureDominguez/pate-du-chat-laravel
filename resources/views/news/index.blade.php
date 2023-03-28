@extends('layouts.app')
@include('components.head.ckeditor-config')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nos actus') }}</div>

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
        </div>
    </div>
</div>
@endsection
