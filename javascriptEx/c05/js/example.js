var list = document.getElementsByTagName('ul')[0];

var newItemLast = document.createElement('li');
var newTextLast = document.createTextNode('ccc');
newItemLast.appendChild(newTextLast);
list.appendChild(newItemLast);

var newItemFirst = document.createElement('li');
var newTextFirst = document.createTextNode('aaa');
newItemFirst.appendChild(newTextFirst);
list.insertBefore(newItemFirst, list.firstChild);

var listItems = document.querySelectorAll('li');

var i;
for(i = 0; i < listItems.length; i++)
    listItems[i].className = 'cool';

var heading = document.querySelector('h2');
var headingtext = heading.firstChild.nodeValue;
var totalItems = listItems.length;
var newHeading = headingtext + '<span>' + totalItems + '/<span>';
heading.innerHTML = newHeading;