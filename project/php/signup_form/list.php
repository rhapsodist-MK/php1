<?php
    require_once "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원 목록관리</title>
</head>
<body>
    <?php
        try{
            $sql = "SELECT * FROM logintest";
            $stmh = $pdo->query($sql); // 바로실행
            
            $count = $stmh->rowCount(); //행단위로 몇개의 레코드가 존재하는지
            echo " 검색결과는 $count 건<br>";
            
        }catch(PDOException $e){
            
        }
    
        if($count < 1)
            echo "가입자가 없습니다.<br>";
        else{
            
    ?>
    
    <table border="1" width="600">
        <tr>
            <th>이메일</th>
            <th>비번</th>
            <th>이름</th>
            <th>전번</th>
            <th>가입일</th>
            <th>수정</th>
            <th>삭제</th>
        </tr>
    <?php
            while($row = $stmh->fetch(PDO::FETCH_ASSOC)){ // 쿼리 결과를 연관 배열로 돌려줌
    ?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['passwd']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['tel']?></td>
            <td><?=$row['reg_date']?></td>
            <td><a href="updateForm.php?id=<?=$row['id']?>">수정</a></td>
            <td><a href="delete.php?id=<?=$row['id']?>">삭제</a></td>
        </tr>
    <?php   } 
        }
    ?>
        
    </table>
    
    <a href="./insertForm.php">insertForm으로 이동</a>
</body>
</html>