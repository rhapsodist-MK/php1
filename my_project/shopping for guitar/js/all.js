$(function(){
    $("#signup_button").on('click', function(event){
        event.preventDefault();
        var email = $("#email").val();
        alert(email);
        ajax('checking', {emailCheck:1,email:email}, $("#email_check").html(data));
        
        
    });
    
    
    function ajax(url, data, success){
        $.ajax({
            url: url,
            method: "POST",
            data: data,
            success: function(data){
                success;
            }
        });
    }
});