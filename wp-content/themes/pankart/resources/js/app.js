import Pluton from "@whitecube/pluton/pluton";

class Pankart {

    constructor() {
        //TODO
    }
    load() {
        this.pluton = new Pluton();
        console.log('Hello Pluton')
    }

}
window.addEventListener('load', (e) => {
    window.Pankart = new Pankart();
    window.Pankart.load();
});