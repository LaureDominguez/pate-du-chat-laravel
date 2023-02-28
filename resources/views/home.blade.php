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

            <div id="album-rotator" class="album-rotator">
                <div id="album-rotator-holder" class="album-rotator-holder">
                    <a target="_top" class="album-item" href="">
                        <img src="/images/1677165410.png" alt="">
                        <p class="album-details">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                        </p>
                    </a>
                    <a target="_top" class="album-item" href="https://fjolt.com/article/apple-cards-webl-gl-javascript">
                        <img src="/images/1677165410.png" alt="">
                        <p class="album-details short">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                        </p>
                    </a>
                    <a target="_top" class="album-item" href="">
                        <img src="/images/1677165410.png" alt="">
                        <p class="album-details">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                        </p>
                    </a>
                    <a target="_top" class="album-item" href="">
                        <img src="/images/1677165410.png" alt="">
                        <p class="album-details">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                        </p>
                    </a>
                    <a class="album-item" href="">
                        <img src="/images/1677165410.png" alt="">
                        <p class="album-details">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti necessitatibus ipsum dolores sint, eveniet corrupti et. Aut eligendi expedita quae exercitationem nemo dignissimos vero aperiam quasi? Suscipit commodi enim deserunt!
                        </p>
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
