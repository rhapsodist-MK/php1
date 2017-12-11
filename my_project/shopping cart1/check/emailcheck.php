<?php
    require_once '../db_conn.php';

    $email = $_POST['email'];
    $emailValidation = "/^[a-z0-9.-]*@[a-z0-9]+(\.[a-z]{2,4})$/";

    $sql = "SELECT name FROM user_info WHERE email = '$email' LIMIT 1";
    $pstmt = $pdo->query($sql);
    $count = $pstmt->rowCount();

    if(isset($_POST['email'])){
        if(!preg_match($emailValidation, $email)){
            echo "
                <div class='alert alert-warning'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>Email form is not valid.</b>
                </div>
            ";
        }elseif($count > 0){
            echo "
                <div class='alert alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>Email Address is already signed up, Try Another email address</b>
                </div>
            ";
        }else{
            echo '';
        }
        exit(); 
    }