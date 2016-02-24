/**
 * Created by dfleuren on 24.02.2016.
 */
"use strict";

var tbody = document.getElementsByTagName('tbody')[0];

var content = '';

for (let i = 0; i < 16; i++) {
    let tr = document.createElement('tr');
    for (let i = 0; i < 16; i++) {
        let td = document.createElement('td');
        tr.appendChild(td);
    }
    tbody.appendChild(tr);
}


var tds = document.getElementsByTagName('td');
var radio = document.querySelectorAll('input');

for (let i = 0; i < 256; i++) {
    tds[i].style.backgroundColor = 'rgb(' + i + ',0,0)';
}

for (let i = 0; i < radio.length; i++)
    radio[i].addEventListener('click', function () {

        if (radio[i].id == "red") {
            for (let i = 0; i < 256; i++) {
                tds[i].style.backgroundColor = 'rgb(' + i + ',0,0)';
            }
        } else if (radio[i].id == "green") {
            for (let i = 0; i < 256; i++) {
                tds[i].style.backgroundColor = 'rgb(0, ' + i + ',0)';
            }
        } else if (radio[i].id == "blue") {
            for (let i = 0; i < 256; i++) {
                tds[i].style.backgroundColor = 'rgb(0,0,' + i + ')';
            }
        }
    });


var div = document.querySelector('div');
tbody.addEventListener('mouseover', function (e) {
    let farbe = e.target.style.backgroundColor;
    div.style.backgroundColor = farbe;
    div.innerHTML = farbe;
});

