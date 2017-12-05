var msg;
var level = 1;

switch(level){
    case 1:
        msg = '1 level';
        break;
    case 2:
        msg = '2 level';
        break;
    case 3:
        msg = 'last level';
        break;
    default :
        msg = 'good luck';
        break;
}
        
document.getElementById('answer').innerHTML = msg;