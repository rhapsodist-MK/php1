var score = [24, 32, 17];
var arrayLength = score.length;
var roundNumber = 0;
var msg = '';
var i;

for(var i = 0; i < arrayLength; i++){
    roundNumber = (i + 1);
    
    msg += 'the ' + roundNumber + ' : ';
    msg += score[i] + '<br>';
}

document.getElementById('answer').innerHTML = msg;