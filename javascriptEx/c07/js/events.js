$(function(){
    var ids = '';
    var $listitem = $('li');
    
    $listitem.on('mouseover click', function(){
        ids = this.id;
        $listitem.children('span').remove();
        $(this).append('<span class = "priority">' + ids + '</span>');
    });
    
    $listitem.on('mouseout', function(){
        $(this).children('span').remove(); 
    });
});