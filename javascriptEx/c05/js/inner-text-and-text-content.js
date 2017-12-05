var firstitem = document.getElementById('one');

var showtextcontent = firstitem.textContent;
var showinnertext = firstitem.innerText;

var msg = '<p>textContent : ' + showtextcontent + '</p>';
msg += '<p>innerText : ' + showinnertext + '</p>';

var el = document.getElementById('scriptResults');
el.innerHTML = msg;

fisrtitem.textContent = 'sdfsdf';