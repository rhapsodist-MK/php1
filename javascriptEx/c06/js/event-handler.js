function checkUsername(){
    var elMsg = document.getElementById('feedback');
    if(this.value.length < 10)
        elMsg.textContent = '10 letter up';
    else
        elMsg.textContent = '';
}


var elUsername = document.getElementById('username');
elUsername.onblur = checkUsername;