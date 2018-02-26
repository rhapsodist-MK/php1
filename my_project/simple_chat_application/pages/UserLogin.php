<?php
    session_start();

    require_once 'classes.php';

    if(isset($_POST['UserMailLogin']) && isset($_POST['UserPasswordLogin'])){
        $user = new User();
        $user->setUserMail($_POST['UserMailLogin']);
        $user->setUserPassword(sha1($_POST['UserPasswordLogin']));
        
        if($user->Userlogin()==true){
            $_SESSION['UserId'] = $user->getUserId();
            $_SESSION['UserName'] = $user->getUserName();
            $_SESSION['UserMail'] = $user->getUserMail();
        }
    }