$(function(){
    $('ul').before('<p classs="notice">changed</p>');
    $('li.hot').prepend('+ ');
    var $newListItem = $('<li><em>aaaa</em>dddddd</li>');
    $('li:last').after($newListItem);
});