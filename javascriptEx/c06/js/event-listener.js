function checkUsername(){
    var elMsg = document.getElementById('feedback');
    if(this.value.length < 3){
        elMsg.textContent = '3 letter';
    }
    else
        elMsg.textContent = '';
}

var elUsername = document.getElementById('username');
elUsername.addEventListener('blur', checkUsername, false);
