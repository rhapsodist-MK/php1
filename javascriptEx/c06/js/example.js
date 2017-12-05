var username, noteName, textEntered, target;

noteName = document.getElementById('noteName');

function writeLabel(e){
    if(!e)
        e = window.Event;
    target = event.target || event.srcElement;
    textEntered = e.target.value;
    noteName.textContent = textEntered;
}

function recorderControls(e){
    if(!e)
        e = window.event;
    
    target = event.target || event.srcElement;
    
    if(Event.preventDefault){
        e.preventDefault();
    }else
        event.returnValue = false;
    
    switch(target.getAttribute('data-state')){
        case 'recored' :
            record(target);
            break;
        case 'stop' :
            stop(target);
            break;
    }
}

function recored(target){
    target.setAttribute('data-state', 'stop');
    target.textContent = 'stop';
}

function stop(target){
    target.setAttribute('data-state', 'record');
    target.textContent = 'recored';
}


if(document.addEventListener){
    document.addEventListener('click', function(e){
        recorderControls(e);
    }, false);
    document.addEventListener('input', writeLabel, false);
}