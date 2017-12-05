var score = 75;
var msg = '';

function congratulate(){
    msg += 'congratulation!';
}

if(score >= 50){
    congratulate();
    msg += '<br>next level';
}

document.getElementById('answer').innerHTML = msg;