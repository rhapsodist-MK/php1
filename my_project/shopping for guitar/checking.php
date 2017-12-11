<?php

    require_once 'db_conn.php';

    if(isset($_POST['emailCheck'])){
        $email = $_POST['email'];
        $emailValidation = "/^[a-z0-9.-]*@[a-z0-9]+(\.[a-z{2,4}])$/";
        
        if(empty($email)){
            echo "you have to insert email adrress";
            exit();
        }elseif(!preg_match($emailValidation,$email)){
            echo "this adrress is not valid.";
            exit();
        }
        
        $sql = "SELECT email FROM user_info WHERE email = '$email'";
        $stmt = $pdo->query($sql);
        $count = $stmt->rowCount();
        
        if($count>0){
            echo "email adrress is already signed up";
            exit();
        }else{
            echo '';
        }
    }