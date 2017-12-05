$(function(){  
    var $listitems = $('li');
    
    $listitems.filter('.hot:last').removeClass('hot');
    $('li:not(.hot)').addClass('cool');
    $listitems.has('em').addClass('complete');
    
    $listitems.each(function(){
        var $this = $(this);
        if($this.is('.hot')){
            $this.prepend('most item ');
        }
    });
    
    $('li:contains("honey")').append('(nai)');
});