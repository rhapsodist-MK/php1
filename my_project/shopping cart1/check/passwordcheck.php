<?php
    require_once '../db_conn.php';

    $password = $_POST['password'];
    $passwordValidation = "/^[a-zA-Z0-9]{8,20}$/";

    if(isset($_POST['password'])){
        if(!preg_match($passwordValidation, $password)){
            echo "
                <div class='alert alert-warning'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>password has to be mixed up by a~z, A~Z, 0~9 and to be over 8 digits(less then 20 digits)</b>
                </div>
            ";
        }else{
            echo '';
        }
        exit();
    }