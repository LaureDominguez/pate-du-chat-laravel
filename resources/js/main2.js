class Carousel {

    /**
     * 
     * @param {HTMLElement} element 
     * @param {Object} options 
     * @param {Object} options.slidesToScroll Nombre d'éléments à faire défiler 
     * @param {Object} options.slidesVisible Nombre d'éléments visibles dans un slide
     */
    constructor(element, options = {}) {
        this.element = element
        this.options = Object.assign({}, {
            slidesToScroll: 1,
            slidesVisible: 1
        }, options)
        this.children = [].slice.call(element.children)
        let ratio = this.children.length / this.options.slidesVisible
        let root = this.createDivWithClass('carousel')
        let container = this.createDivWithClass('carousel-inner')
        container.style.width = (ratio * 100) + "%"
        root.appendChild(container)
        this.element.appendChild(root)
        this.children.forEach((child) => {
            let item = this.createDivWithClass('carousel-item')
            item.style.width = ((100 / this.options.slidesVisible) / ratio) + "%"
            item.appendChild(child)
            container.appendChild(item)
        });
    }

    /**
     * 
     * @param {string} className
     * @returns {HTMLElement} 
     */
    createDivWithClass(className) {
        let div = document.createElement('div')
        div.setAttribute('class', className)
        return div
    }
}

document.addEventListener('DOMContentLoaded', function () {
    new Carousel(document.querySelector('#slide-1'), {
        slidesToScroll: 3,
        slidesVisible: 3
    })
})
