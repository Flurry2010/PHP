/**
 * Created by dfleuren on 20.01.2016.
 */

"use strict";

var arr = [];

for (let i = 0; i < 100; i++){
    arr[i] = Math.floor(Math.random()*100)+1;
}
console.log(arr);

arr.forEach(function(value, index, array){

    if(value %2 === 0){
        array[index] = value *2;
    }else{
        array[index] = value *3;
    }
});
console.log(arr);


function isGerade(value){
    return  ((value % 2) !== 0);
}
var arrNew = arr.filter(isGerade);
console.log(arrNew);


var arrMin100 = arr.filter(function(value){
    return  (value < 100);
});
console.log(arrMin100.toString());

var ip = "192.168.0.1";

var res = ip.split(".");
var neu = res.join(" ");
console.log(neu);

console.log(ip.split(".").join(" "));

var kreis = {
    xPos: 0,
    yPos: 0,
    radius: 20,
    getDurchmesser: function () {
        return this.radius * 2
    }
}

var kreis1 = {
    xPos: 0,
    yPos: 0,
    radius: 20,
    get durchmesser() {return this.radius *2},
    set durchmesser(value) {this.radius = value /2},
    }


kreis.füllfarbe = "yellow";
kreis.toString = function(){
    return 'Kreis mit Radius von ' + this.radius + ' Metern.';
}
