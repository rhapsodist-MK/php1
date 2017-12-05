$(function(){
    var $newitembutton = $('#newItemButton');
    var $newitemform = $('#newItemForm');
    var $textinput = $('input:text');
    
    $newitembutton.show();
    $newitemform.hide();
    
    $('#showForm').on('click', function(){
        $newitembutton.hide();
        $newitemform.show();
    });
    
    $newitemform.on('submit', function(event){
        event.preventDefault();
        var newText = $('input:text').val();
        $('li:last').after('<li>' + newText + '</li>');
        $newitemform.hide();
        $newitembutton.show();
        $textinput.val('');
    });
});