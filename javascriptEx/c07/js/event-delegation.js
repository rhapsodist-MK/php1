$(function(){
    var listitem, itemStatus, eventType;
    
    $('ul').on('click mouseover',
              ':not(#four)',
              {status:'importent'},
              function(event){
                listitem = 'item : ' + event.target.textContent + '<br>';
                itemStatus = 'status : ' + event.data.status + '<br>';
                eventType = 'event : ' + event.type;
                $('#notes').html(listitem + itemStatus + eventType);
    });
});