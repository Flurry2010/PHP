/**
 * Created by dfleuren on 03.02.2016.
 */

"use strict";


var input_zahl1 = document.getElementById('z1');
var input_zahl2 = document.getElementById('z2');
var button_add = document.getElementById('plus');
var button_multi = document.getElementById('mal');
//var ausgabe = document.getElementById('erg');
var ausgabe = document.getElementsByTagName('div')[0];

button_add.addEventListener('click',function(){

    let zahl1 = +input_zahl1.value;
    let zahl2 = +input_zahl2.value;
    let erg = zahl1 + zahl2;
    ausgabe.innerHTML = erg;
});

button_multi.addEventListener('click',function(){

    let erg = +input_zahl2.value * +input_zahl1.value;
    ausgabe.innerHTML = erg;
});


var farben = ['red','green','yellow','salmon','pink','black'];

//var pElemente = document.getElementsByTagName('p');
var pElemente = document.querySelectorAll('p');



var button_start = document.getElementById('start');
var id;
button_start.addEventListener('click',function(){
    id = setInterval(function() {

        for (let i = 0; i < pElemente.length; i++) {

            let farbe = farben[Math.floor(Math.random() * farben.length)];

            pElemente[i].style.backgroundColor = farbe;
        }
    },1);
});

//var id = setInterval(function() {
//
//    for (let i = 0; i < pElemente.length; i++) {
//
//        let farbe = farben[Math.floor(Math.random() * farben.length)];
//
//        pElemente[i].style.backgroundColor = farbe;
//    }
//
//},1);

var button_stop = document.getElementById('stop');

button_stop.addEventListener('click',function() {
    clearInterval(id);
    for (let i = 0; i < pElemente.length; i++) {
        pElemente[i].style.backgroundColor = 'white';
    }

});


