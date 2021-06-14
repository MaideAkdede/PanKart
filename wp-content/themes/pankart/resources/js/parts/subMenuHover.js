export default class SubMenuHover {

    static get selector() {
        return '.sub-menu'
    }

    constructor(element) {
        this.element = element;

        this.element.classList.add('sub-menu__js');
        this.element.classList.add('sub-menu__hidden');

        this.btn = document.querySelector('.menu-item-44 a');

        this.btn.addEventListener('click', (e)=>{
            e.preventDefault();
            this.element.classList.toggle('sub-menu__hidden')
        });
    }
}