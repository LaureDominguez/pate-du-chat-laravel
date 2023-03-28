@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Les Pâtes du chat') }}</div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}

                <section class="home">
                    <figure>
                        <img src="/images/pasta-flour_I4MIIMHZ5M.jpg">
                        <figcaption>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, nemo ullam! Accusamus necessitatibus enim odit laudantium esse iste fugit, nemo vel accusantium quod numquam voluptates voluptate voluptas, doloribus, excepturi reprehenderit. <br>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore a molestiae tenetur, accusantium similique corrupti ratione fugit voluptatibus dolores expedita odio quas magnam rerum dignissimos harum voluptatem facilis voluptatum quos! <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolorum ratione consequuntur blanditiis explicabo natus omnis, id, incidunt quae laborum magni ipsam, exercitationem quidem sequi obcaecati minima ex hic illum!
                        </figcaption>
                    </figure>
                </section>
                    
                <section>
                    <h2>News</h2>
                    @include('components.caroussel')
                </section>

                <section>
                    <h2>Shop</h2>

                    @include('components.caroussel')
                </section>

                <section>
                    <h2>Recettes</h2>
                    
                    @include('components.caroussel')
                </section>

                <section>
                    <h2>contact</h2>
                    <div>contact + map</div>
                    <table>
                        
                    </table>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
