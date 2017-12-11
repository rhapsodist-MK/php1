<?php
    require_once '../db_conn.php';

    $mobile = $_POST['mobile'];
    $mobileValidation = "/^\d{3}-\d{3,4}-\d{4}$/";


    if(isset($_POST['mobile'])){
        if(!preg_match($mobileValidation, $mobile)){
            echo "
                <div class='alert alert-warning'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>Mobile number is has to be 000-000(0)-0000 form</b>
                </div>
            ";
        }else{
            echo '';
        }
        exit();   
    }
