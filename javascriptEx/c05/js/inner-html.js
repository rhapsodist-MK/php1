var firstitem = document.getElementById('one');

var itemContent = firstitem.innerHTML;

firstitem.innerHTML = '<a href=\"http://example.org\">' + itemContent + '</a>';