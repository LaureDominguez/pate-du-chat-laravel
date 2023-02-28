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

            <div id="album-rotator">
                <div id="album-rotator-holder">
                    <a target="_top" class="album-item" href="">
                    <span class="album-details">
                        <span class="title">Click to</span>
                        <span class="subtitle">Follow</span>
                        <span class="subtext">On Twitter</span>
                    </span>
                    </a>
                    <a target="_top" class="album-item" href="https://fjolt.com/article/apple-cards-webl-gl-javascript">
                    <span class="album-details">
                        <span class="title">Read the</span>
                        <span class="subtitle">Tutorial</span>
                        <span class="subtext">View tutorial for this effect</span>
                    </span>
                    </a>
                    <a target="_top" class="album-item" href="">
                    <span class="album-details">
                        <span class="title">Finally</span>
                        <span class="subtitle">We Go</span>
                        <span class="subtext">Some text to describe this item</span>
                    </span>
                    </a>
                    <a target="_top" class="album-item" href="">
                    <span class="album-details">
                        <span class="title">And</span>
                        <span class="subtitle">One More</span>
                        <span class="subtext">Some text to describe this item</span>
                    </span>
                    </a>
                    <a class="album-item" href="">
                    <span class="album-details">
                        <span class="title">And</span>
                        <span class="subtitle">Finally..</span>
                        <span class="subtext">Some text to describe this item</span>
                    </span>
                    </a>
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
