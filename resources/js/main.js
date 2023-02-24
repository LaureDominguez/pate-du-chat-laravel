class Carousel {

    /**
     * 
     * @param {HTMLElement} element 
     * @param {Object} options 
     * @param {Object} options.slidesToScroll Nombre d'éléments à faire défiler 
     * @param {Object} options.slidesVisible Nombre d'éléments visibles dans un slide
     */
    constructor(element, options = {}) {
        console.log('hello')
    }
}

document.addEventListener('DOMContentLoaded', function () {
    new Carousel(document.querySelector('#slide-1'), {
        slidesToScroll: 1,
        slidesVisible: 3
    })
})
