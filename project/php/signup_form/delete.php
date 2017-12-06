<?php
    require_once 'db_conn.php';
    $id = $_REQUEST["id"];

    try{
        $pdo->beginTransaction(); //select 외 쓸수 있음
        $sql = "DELETE FROM logintest WHERE id = ?";
        
        $stmh = $pdo->prepare($sql);
        $stmh->bindValue(1,$id,PDO::PARAM_STR);
        $stmh->execute();
        $pdo->commit();
        
        header("Location:./list.php"); // 해당위치로 변경
        
    }catch(PDOException $e){
        $pdo->rollBack(); //취소
        die('오류 : ' . $e->getMessage());
    }
