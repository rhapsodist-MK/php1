var elUsername = document.getElementById('username');
var elMsg = document.getElementById('feedback');

function checkUsername(minLength){
    if(elUsername.value.length < minLength)
        elMsg.innerHTML = 'name has to be longger then ' + minLength;
    else
        elMsg.innerHTML = '';
}

if(elUsername.addEventListener){
    elUsername.addEventListener('blur', function(){checkUsername(10);}, false);
}else
    elUsername.attachEent('onblur', function(){checkUsername(10);});