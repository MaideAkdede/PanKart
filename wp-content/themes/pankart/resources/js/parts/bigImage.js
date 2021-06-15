export default class BigImage {

    static get selector() {
        return '.photo__div'
    }

    constructor(element) {
        this.element = element;
        this.link = element.querySelector('.photo__link');

        this.img = element.querySelector('.photo__img');
        this.imgSrc = element.querySelector('.photo__img').src;

        this.big = document.querySelector('.photo__big');
        this.bigImg = document.querySelector('.photo__big .img');
        this.bigImageSrc = document.querySelector('.photo__big .img').src;

        this.element.addEventListener('click', (e) => {
            e.preventDefault();
            this.big.classList.add('photo__big-active');
            document.querySelector('.photo__big .img').src = this.imgSrc;
        });

        this.btn = document.querySelector('.photo__big .close');
        this.btn.addEventListener('click', (e)=>{
            e.preventDefault();
            document.querySelector('.photo__big .img').src = '';
            this.big.classList.remove('photo__big-active');
        })
    }

}