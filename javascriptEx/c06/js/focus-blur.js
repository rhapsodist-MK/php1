var el =  document.getElementById('username');
var elMsg = document.getElementById('feedback');

function checkUsername(){
    var username = el.value;
    if(username.length < 5){
        elMsg.className = 'warning';
        elMsg.textContent = 'too short';
    }else
        elMsg.textContent = '';
}

function tipUsername(){
    elMsg.className = 'tip';
    elMsg.innerHTML = 'name has to be over then 5 letters';
}


el.addEventListener('focus', tipUsername, false);
el.addEventListener('blur', checkUsername, false);