/**
 * Created by dfleuren on 10.02.2016.
 */

"use strict";

var tbody = document.getElementsByTagName('tbody')[0];

var content = '';

for (let i = 0; i < 16; i++) {
    content += '<tr>';
    for (let i = 0; i < 16; i++) {
        content += '<td></td>';
    }

    content += '</tr>';
}

tbody.innerHTML = content;

var tds = document.getElementsByTagName('td');
var radio = document.querySelectorAll('input');

for (let i = 0; i < 256; i++) {
    tds[i].style.backgroundColor = 'rgb(' + i + ',0,0)';
}

for (let i = 0; i < radio.length; i++)
    radio[i].addEventListener('click', function () {

      if(radio[i].id == "red") {
          for (let i = 0; i < 256; i++) {
              tds[i].style.backgroundColor = 'rgb(' + i + ',0,0)';
          }
      }else if(radio[i].id == "green") {
              for (let i = 0; i < 256; i++) {
                  tds[i].style.backgroundColor = 'rgb(0, ' + i + ',0)';
              }
          }else if(radio[i].id == "blue") {
    for (let i = 0; i < 256; i++) {
        tds[i].style.backgroundColor = 'rgb(0,0,' + i + ')';
    }
}
    });



