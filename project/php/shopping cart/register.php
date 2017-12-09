<?php
    require_once 'db_conn.php';

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $repassword = md5($_POST['repassword']);    //md5 : 주어진 문자열의 해쉬값을 구해주는 함수, 문자열을 암호화 하는데 이용 가능
    $mobile = $_POST['mobile'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $name = "/^[A-Z][a-zA-Z ]+$/";
    //$emailValidation = "/^[a-z0-9]+(\.[_a-z0-9-])*@[a-z0-9]+(\.[a-z]{2,4})$/";
    $number = "/^[0-9]+$/";


    if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) || empty($mobile) || empty($address1) || empty($address2)){
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>Please Fill all fields..!!</b>
            </div>
        ";
        exit();
    }

    elseif(!preg_match($name,$f_name)){
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>$f_name is not valid</b>
            </div>
        ";
        exit();   
    }

    elseif(!preg_match($name,$l_name)){
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>l_name is not valid</b>
            </div>
        ";
        exit();   
    }

    // elseif(!preg_match($emailValidation, $email)){
    //     echo "$email address is not valid";
    // }

    elseif(strlen($password) < 9){
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>Password is weak</b>
            </div>
        ";
        exit();
    }

    elseif($password != $repassword){
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>Password is not same</b>
            </div>
        ";
        exit();
    }

    elseif(!preg_match($number, $mobile)){
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>Mobile number is not valid</b>
            </div>
        ";
        exit();
    }

    elseif(strlen($mobile) < 10){
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>Mobile number is should be over 10 digit</b>
            </div>
        ";
        exit();
    }else{
        $sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1";
        $pstmt = $pdo->query($sql);
        $count = $pstmt->rowCount();

        if($count > 0){

            echo "
                <div class='alert alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>Email Address is already available Try Another email address</b>
                </div>
            ";
            exit();
        }else{
            $pdo->beginTransaction();
            $sql = "INSERT INTO user_info(first_name, last_name, email, passwd, mobile, address1, address2) 
                    VALUES(:f_name, :l_name, :email,:password, :mobile, :address1,:address2);";
            $pstmt = $pdo->prepare($sql);
            $pstmt->bindValue(':f_name', $f_name, PDO::PARAM_STR);
            $pstmt->bindValue(':l_name', $l_name, PDO::PARAM_STR);
            $pstmt->bindValue(':email', $email, PDO::PARAM_STR);
            $pstmt->bindValue(':password', $password, PDO::PARAM_STR);
            $pstmt->bindValue(':mobile', $mobile, PDO::PARAM_STR);
            $pstmt->bindValue(':address1', $address1, PDO::PARAM_STR);
            $pstmt->bindValue(':address2', $address2, PDO::PARAM_STR);
            $pstmt->execute();
            $pdo->commit();

            echo "
                <div class='alert alert-success'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>you are Registered successfully...!!!</b>
                </div>
            ";
        }
    }
