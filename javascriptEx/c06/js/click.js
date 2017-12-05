var msg = '<div class = \"header\"><a id="close\" href=\"#\">close X</a></div>';

msg += '<div class=\"message\"><h2>injecting</h2>';
msg += 'from 3 to 4 we have fixing';
msg += 'so you can\'t use for that thime';

var elNote = document.createElement('div');
elNote.setAttribute('id', 'note');
elNote.innerHTML = msg;
document.body.appendChild(elNote);

function dismissNote(){
    document.body.removeChild(elNote);
}


var elclose = document.getElementById('close');
elclose.addEventListener('click', dismissNote, false);