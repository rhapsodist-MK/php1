$(function(){
    $('li:contains("fresh figs")').text('amon');
    $('li.hot').html(function(){
       return '<em>' + $(this).text() + '</em>';
    });
    $('li#one').remove();
});