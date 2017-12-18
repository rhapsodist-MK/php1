<?php
    require_once 'db_conn.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    $sql = "INSERT INTO user_info(name, email, passwd, mobile, address) 
            VALUES(:name, :email, :password, :mobile, :address);";

    $pdo->beginTransaction();
    $pstmt = $pdo->prepare($sql);
    $pstmt->bindValue(':name', $name, PDO::PARAM_STR);
    $pstmt->bindValue(':email', $email, PDO::PARAM_STR);
    $pstmt->bindValue(':password', $password, PDO::PARAM_STR);
    $pstmt->bindValue(':mobile', $mobile, PDO::PARAM_STR);
    $pstmt->bindValue(':address', $address, PDO::PARAM_STR);
    $pstmt->execute();
    $pdo->commit();


