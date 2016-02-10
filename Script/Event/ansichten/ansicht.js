/**
 * Created by dfleuren on 03.02.2016.
 */

"use strict";

var divElemente = document.querySelectorAll('div');

var buttonElemente = document.querySelectorAll('button');


function hideDiv(liste) {
    for (let i = 0; i < liste.length; i++) {
        liste[i].style.display = 'none';
    }
}

function hideButton(list) {
    for (let i = 0; i < list.length; i++) {
        list[i].style.backgroundColor = '';
    }
}

for (let i = 0; i < buttonElemente.length; i++)
    buttonElemente[i].addEventListener('click', function () {

        hideButton(buttonElemente);
        hideDiv(divElemente);
        divElemente[i].style.display = 'block';
        buttonElemente[i].style.backgroundColor = 'red';
    });


