<?php
    require_once 'db_conn.php';

    $name = $_POST['name'];
    $email = $_SESSION['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    unset($_SESSION['email']);
    unset($_SESSION['name']);

    $sql = "UPDATE user_info SET name = ?, passwd = ?, mobile = ?, address = ? WHERE email = ?";

    $pdo->beginTransaction();
    $pstmt = $pdo->prepare($sql);
    $pstmt->bindValue(1, $name, PDO::PARAM_STR);
    $pstmt->bindValue(2, $password, PDO::PARAM_STR);
    $pstmt->bindValue(3, $mobile, PDO::PARAM_STR);
    $pstmt->bindValue(4, $address, PDO::PARAM_STR);
    $pstmt->bindValue(5, $email, PDO::PARAM_STR);
    $pstmt->execute();
    $pdo->commit();


    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
