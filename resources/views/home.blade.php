<x-app-layout>
    <x-slot name="header">
        <h1>{{ __('Les Pâtes du chat') }}</h1>
    </x-slot>

    <x-slot name="main">
        <section>
            <h2>News</h2>
            <div class="carousel">
                <div class="carousel-inner">
                    <figure class="carousel-item">
                        <img alt="" src="/images/1677078242.png" />
                        <figcaption class="short">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto recusandae deleniti praesentium velit ab quasi similique officia facere reprehenderit corrupti hic beatae necessitatibus obcaecati, officiis ducimus rem a. Sint, quo!
                        </figcaption>
                    </figure>
                    <figure class="carousel-item carousel-active">
                        <img alt="" src="/images/1677078242.png" />
                        <figcaption class="short">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto recusandae deleniti praesentium velit ab quasi similique officia facere reprehenderit corrupti hic beatae necessitatibus obcaecati, officiis ducimus rem a. Sint, quo!
                        </figcaption>
                    </figure>
                    <figure class="carousel-item">
                        <img alt="" src="/images/1677078242.png" />
                        <figcaption class="short">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto recusandae deleniti praesentium velit ab quasi similique officia facere reprehenderit corrupti hic beatae necessitatibus obcaecati, officiis ducimus rem a. Sint, quo!
                        </figcaption>
                    </figure>
                </div>
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
