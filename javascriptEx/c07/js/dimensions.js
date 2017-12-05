$(function(){
    var listheight = $('#page').height();
    $('ul').append('<p> height : ' + listheight + 'px</p>');
    $('li').width('50%');
    $('li#one').width(145);
    $('li#two').width('75%');
});