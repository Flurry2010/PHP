/**
 * Created by dfleuren on 24.02.2016.
 */
"use strict";


document.querySelector('input').addEventListener('keypress', function(e) {
    if (e.keyCode < 48 || e.keyCode > 57)
        e.preventDefault();
});