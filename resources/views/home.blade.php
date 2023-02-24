<x-app-layout>
    <x-slot name="head">
        @vite(['resources/js/main.js'])
    </x-slot>

    <x-slot name="header">
        <h1>{{ __('Les Pâtes du chat') }}</h1>
    </x-slot>

    <x-slot name="main">
        <section>
            <h2>News</h2>
            <div id="carousel" class="carousel">
                <div class="carousel-inner">
                    <figure id="slide-0" class="carousel-item">
                        <img alt="" src="/images/1677165410.png" />
                        <figcaption class="carousel-caption">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto recusandae deleniti praesentium velit ab quasi similique officia facere reprehenderit corrupti hic beatae necessitatibus obcaecati, officiis ducimus rem a. Sint, quo!
                        </figcaption>
                    </figure>
                    <figure id="slide-1" class="carousel-item carousel-active">
                        <img alt="" src="/images/1677165410.png" />
                        <figcaption class="carousel-caption">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto recusandae deleniti praesentium velit ab quasi similique officia facere reprehenderit corrupti hic beatae necessitatibus obcaecati, officiis ducimus rem a. Sint, quo!
                        </figcaption>
                    </figure>
                    <figure id="slide-2" class="carousel-item">
                        <img alt="" src="/images/1677165410.png" />
                        <figcaption class="carousel-caption">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto recusandae deleniti praesentium velit ab quasi similique officia facere reprehenderit corrupti hic beatae necessitatibus obcaecati, officiis ducimus rem a. Sint, quo!
                        </figcaption>
                    </figure>
                </div>
                <a href="#carousel" class="carousel-control-prev" role="button">back</a>
                <a href="#carousel" class="carousel-control-next" role="button">next</a>
            </div>
        </section>

        <section>
            <h2>Shop</h2>
            <div>caroussel de produits</div>
        </section>

        <section>
            <h2>Recettes</h2>
            <div>caroussel de recettes</div>
        </section>

        <section>
            <h2>contact</h2>
            <div>contact + map</div>
        </section>
    </x-slot>

</x-app-layout>
