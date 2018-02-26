<?php
    session_start();
    require_once "classes.php";
    
    if(isset($_POST['ChatText'])){
        $chat = new Chat();
        $chat->setChatUserId($_SESSION['UserId']);
        $chat->setChatText($_POST['ChatText']);
        $chat->InsertChatMessage();
    }
?>