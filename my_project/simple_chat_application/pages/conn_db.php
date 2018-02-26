<?php

    $host = 'localhost';
    $db_name = 'chat';
    $db_user = 'root';
    $db_pw = '';
    $db_type = 'mysql';

    $dsn = "$db_type:host=$host;dbname=$db_name;charset=utf8";


    try{
        $pdo = new PDO($dsn,$db_user,$db_pw);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        
    }catch(PDOException $e){
        die("ERROR : " . $e->getMessage());
    }
