/**
 * Created by dfleuren on 24.02.2016.
 */
"use strict";


var container = document.querySelector('#container');

container.addEventListener('mousedown', function (e) {

    if (e.target === container) return;

    let mx = e.clientX;
    let my = e.clientY;

    let ex = e.target.offsetLeft;
    let ey = e.target.offsetTop;

    let target = e.target;


    var mousemove = function(e) {

            let left = ex - mx + e.clientX;
            let top = ey - my + e.clientY;

            if (left > 380) left = 380;
            if (left < 0) left = 0;
            if (top > 380) top = 380;
            if (top < 0) top = 0;

            target.style.left = left + 'px';
            target.style.top = top + 'px';

        };

    var mouseup = function(e) {
            document.removeEventListener('mousemove', mousemove);
            document.removeEventListener('mouseup', mouseup);
        };

    document.addEventListener('mousemove', mousemove);
    document.addEventListener('mouseup', mouseup);

    });

    div.addEventListener('mousedown', mousedown);

