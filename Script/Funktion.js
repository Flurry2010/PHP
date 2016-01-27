/**
 * Created by dfleuren on 27.01.2016.
 */

"use strict";

var arr1 = [];
var arr2 = [];

for (let i = 0; i < 10; i++){
    arr1[i] = Math.floor(Math.random()*10)+1;
    arr2[i] = Math.floor(Math.random()*10)+1;
}
/*Aufsteigend sortieren*/
function arr3(){
    var arr3 = arr1.concat(arr2);
    return arr3.sort(function(a, b){return a-b});
}

/*Absteigend sortieren*/
function arr4(){
    var arr4 = arr1.concat(arr2);
    return arr4.sort(function(a, b){return b-a});
}

var arryNeu = arr4();

function String(){
    for (let i = 0; i < arryNeu.length; i++){
        document.body.innerHTML +=""+ arryNeu[i] + " "
    }
}


console.log(arr1);
console.log(arr2);
console.log(arr3());
console.log(arr4());
String();

class Kreis{

    constructor(radius,x,y,geschw,farbe){
        this.radius = radius;
        this.x = x;
        this.y = y;
        this.geshw = geschw;
        this.farbe = farbe;
    }

    bewegen(valueX,valueY){
        this.x +=valueX;
        this.y +=valueY;
        return this;
    }

    static abstand(kreis1,kreis2){
        let dx = kreis1.x - kreis2.x;
        let dy = kreis1.y - kreis2.y;
        return Math.sqrt((dx*dx)+(dy*dy));
    }

}

var myKreis1 = new Kreis(20,5,4,2,'red');
var myKreis2 = new Kreis(20,7,6,3,'green');


