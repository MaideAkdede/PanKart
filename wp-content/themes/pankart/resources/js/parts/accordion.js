export default class accordion {

    static get selector() {
        return '.accordion'
    }

    constructor(element) {
        this.element = element;
        this.title = element.querySelector('.accordion__title');
        this.content = element.querySelector('.accordion__content');
        this.plus = element.querySelector('.accordion__plus');

        this.content.classList.add('accordion__hidden');
        this.element.addEventListener('click', ()=>{
            this.content.classList.toggle('accordion__hidden');
            if(this.plus.classList.contains('accordion__plus-active')){
                this.plus.classList.remove('accordion__plus-active');
            } else {
                this.plus.classList.add('accordion__plus-active');
            }
        })
    }
}