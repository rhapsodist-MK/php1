var hotitem = document.querySelectorAll('li.hot');
if(hotitem.length > 0){
    for(var i = 0; i < hotitem.length; i++){
        hotitem[i].className = 'cool';
    }
}