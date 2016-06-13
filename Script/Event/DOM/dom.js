/**
 * Created by dfleuren on 10.02.2016.
 */

"use strict";


var mitte = document.getElementById('zentrum');


mitte.nextElementSibling.innerHTML = 'X';
mitte.previousElementSibling.innerHTML = 'X';
mitte.parentNode.previousElementSibling.lastChild.innerHTML = 'O';
mitte.parentNode.nextElementSibling.firstChild.innerHTML = 'O';
mitte.parentNode.nextElementSibling.firstChild.nextElementSibling.innerHTML = 'X';

