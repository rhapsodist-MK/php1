<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <h2>Welcome <span style="color:green"><?php echo $_SESSION['UserName']; ?></span></h2>
    <br>
    <br>
    <div id="ChatBig">
        <div id="ChatMessages">
        
        </div>
        <textarea name="ChatText" id="ChatText"></textarea>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(function(){
            $('#ChatText').keyup(function(e){
                if(e.keyCode == 13){
                    var ChatText = $('#ChatText').val();
                    $.ajax({
                        type: 'POST',
                        url: 'InsertMessage.php',
                        data: {ChatText:ChatText},
                        success: function(){
                            $('#ChatText').val("");
                        }
                    });
                } 
            });
        });
    </script>
</body>
</html>