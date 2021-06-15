export default class UpArrow {

    static get selector() {
        return '.up__link'
    }

    constructor(element) {
        this.element = element;
        this.element.classList.add('hidden');
        window.addEventListener('scroll', ()=>{
           this.toggleArrow();
        });
        this.element.addEventListener('click', (e)=>{
            e.preventDefault();
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        })
    }
    toggleArrow(){
        if(window.scrollY > window.innerHeight/4){
            this.element.classList.remove('hidden');
        } else if (window.scrollY < window.innerHeight/4){
            this.element.classList.add('hidden');
        }
    }
}