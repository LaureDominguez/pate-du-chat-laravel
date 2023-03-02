class Carousel{
    constructor(element, visible){
        this.element = element;
        this.visible = visible;
        this.currentItem = 0;
        this.setStyle();
    }

    setStyle() {
        let ratio = this.items.length / this.visible;
        this.container.style.width = (ratio * 100) + '%';
        this.items.forEach(item => item.style.width = ((100 / this.visible) / ratio) + '%');
    }

    next() {
        this.gotoItem(this.currentItem + 1);
    }

    prev() {
        this.gotoItem(this.currentItem - 1);
    }

    gotoItem(index) {
        if (index < 0) {
            index = this.items.length - this.visible;
        }
        else if (index >= this.items.length || ((this.items[this.currentItem + this.visible] === undefined) && index > this.currentItem)) {
            index = 0;
        }
        let translateX = index * -100 / this.items.length;
        this.container.style.tranform = 'translate3d(' + translateX + '%, 0, 0)';
        this.currentItem = index;
    }
}

document.addEventListener("DOMContentLoaded", function () {
    let carousel = document.getElementById("carousel")
    if (carousel) {
        new Carousel('slide-0', 3)
    }
})