import Pluton from "@whitecube/pluton/pluton";

class EasySpacy {
    constructor(){
    }
    load(){
        this.pluton = new Pluton();
        console.log('hello pluton here')
    }
}
window.addEventListener('load', (e)=>{
    window.EasySpacy = new EasySpacy();
    window.EasySpacy.load();
})