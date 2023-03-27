@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Les Pâtes du chat') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
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

                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="https://picsum.photos/300/200" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="https://picsum.photos/300/200" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="https://picsum.photos/300/200" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div id="album-rotator" class="album-rotator">
                    <div id="album-rotator-holder" class="album-rotator-holder">
                        <a target="_top" class="album-item" href="">
                            <img src="/images/1677165410.png" alt="">
                            <p class="album-details">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                            </p>
                        </a>
                        <a target="_top" class="album-item" href="">
                            <img src="https://picsum.photos/300/200" alt="">
                            <p class="album-details">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                            </p>
                        </a>
                        <a target="_top" class="album-item" href="">
                            <img src="https://picsum.photos/300/200" alt="">
                            <p class="album-details">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                            </p>
                        </a>
                        <a target="_top" class="album-item" href="">
                            <img src="https://picsum.photos/300/200" alt="">
                            <p class="album-details">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                            </p>
                        </a>
                        <a class="album-item" href="">
                            <img src="https://picsum.photos/300/200" alt="">
                            <p class="album-details">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                            </p>
                        </a>
                    </div>
                </div>
            </section>

            <section>
                <h2>Shop</h2>
                <div id="album-rotator" class="album-rotator">
                    <div id="album-rotator-holder" class="album-rotator-holder">
                        <a target="_top" class="album-item" href="">
                            <img src="/images/1677165410.png" alt="">
                            <p class="album-details">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                            </p>
                        </a>
                        <a target="_top" class="album-item" href="">
                            <img src="https://picsum.photos/300/200" alt="">
                            <p class="album-details">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                            </p>
                        </a>
                        <a target="_top" class="album-item" href="">
                            <img src="https://picsum.photos/300/200" alt="">
                            <p class="album-details">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                            </p>
                        </a>
                        <a target="_top" class="album-item" href="">
                            <img src="https://picsum.photos/300/200" alt="">
                            <p class="album-details">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                            </p>
                        </a>
                        <a class="album-item" href="">
                            <img src="https://picsum.photos/300/200" alt="">
                            <p class="album-details">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                            </p>
                        </a>
                    </div>
                </div>
            </section>

            <section>
                <h2>Recettes</h2>
                <div id="album-rotator" class="album-rotator">
                    <div id="album-rotator-holder" class="album-rotator-holder">
                        <a target="_top" class="album-item" href="">
                            <img src="/images/1677165410.png" alt="">
                            <p class="album-details">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                            </p>
                        </a>
                        <a target="_top" class="album-item" href="">
                            <img src="https://picsum.photos/300/200" alt="">
                            <p class="album-details">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                            </p>
                        </a>
                        <a target="_top" class="album-item" href="">
                            <img src="https://picsum.photos/300/200" alt="">
                            <p class="album-details">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                            </p>
                        </a>
                        <a target="_top" class="album-item" href="">
                            <img src="https://picsum.photos/300/200" alt="">
                            <p class="album-details">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                            </p>
                        </a>
                        <a class="album-item" href="">
                            <img src="https://picsum.photos/300/200" alt="">
                            <p class="album-details">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                            </p>
                        </a>
                    </div>
                </div>
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
