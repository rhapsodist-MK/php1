function getTarget(e){
    e = window.event;
    
    return e.target || e.srcElement;
}


function itemDone(e){
    var target, elParent, elGrandparent;
    target = getTarget(e);
    elParent = target.parentNode;
    elGrandparent = target.parentNode.parentNode;
    elGrandparent.removeChild(elParent);
    
    e.preventDefault();
}

var el = document.getElementById('shoppingList');
el.addEventListener('click', function(e){
    itemDone(e);
}, false);