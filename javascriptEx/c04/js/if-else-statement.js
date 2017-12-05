var pass = 50;
var score = 40;
var msg;

if(score > pass)
    msg = 'conconcon';
else
    msg = 'try again';

var el = document.getElementById('answer').innerHTML = msg;