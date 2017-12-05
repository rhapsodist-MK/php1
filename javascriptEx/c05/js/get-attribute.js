var firstitem = document.getElementById('one');

if(firstitem.hasAttribute('class'))
    var attr = firstitem.getAttribute('class');

var el = document.getElementById('scriptResults');
el.innerHTML = '<p>1th item\'s name is ' + attr +'<br>';