<?php
    require_once '../db_conn.php';

    $password = $_POST['password'];
    $repassword = $_POST['repassword'];    //md5 : 주어진 문자열의 해쉬값을 구해주는 함수, 문자열을 암호화 하는데 이용 가능

    if(isset($_POST['repassword'])){
        if($password != $repassword){
            echo "
                <div class='alert alert-warning'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>password is not the same</b>
                </div>
            ";
        }else{
            echo '';
        }
        exit();
    }