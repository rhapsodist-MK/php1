<?php
    require_once 'db_conn.php';
    
    session_start();

    if(isset($_POST['userLogin'])){
        $email = $_POST['userEmail'];
        $password = $_POST['userPassword'];
        $sql = "SELECT * FROM user_info WHERE email='$email' AND passwd = '$password'";
        $pstmt = $pdo->query($sql);
        $count = $pstmt->rowCount();

        if($count == 1){
            $row = $pstmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['name'] = $row['name'];
        }
    }

    return require_once 'navbar.php';