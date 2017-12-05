function checkUsername(){
    var elMsg = document.getElementById('feedback');
    var elUsername = document.getElementById('username');
    if(elUsername.value.length < 5){
        elMsg.textContent = 'longer then 5';
    }else
        elMsg.textContent ='';
}