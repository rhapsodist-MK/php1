<?php
    require_once 'classes.php';
    $user = new User();

    if(isset($_POST['UserName']) && isset($_POST['UserMail']) && isset($_POST['UserPassword'])){
        $user->setUserName($_POST['UserName']);
        $user->setUserMail($_POST['UserMail']);
        $user->setUserPassword(sha1($_POST['UserPassword'])); //sha1 : 헤쉬코드로 변환
        $user->InsertUser();
        
        header("Location: ../index.php?success=1");
    }