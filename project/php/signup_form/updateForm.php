<?php
    require_once 'db_conn.php';
    $id = $_REQUEST['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원 수정</title>
</head>
<body>
    <?php
        try{
            $sql = "SELECT * from logintest WHERE id=:id";
            $stmh = $pdo->prepare($sql);
            $stmh->bindValue(':id', $id, PDO::PARAM_STR);
            $stmh->execute();
            $row = $stmh->fetch(PDO::FETCH_ASSOC);        
        }catch(PDOException $e){
            die('오류 : ' . $e->getMessage());
        }
    ?>
    
    <form action="insertPro.php" method="get">
        <table border="1">
            <tr>
                <td>이메일</td>
                <td><input type="text" name="id" size="20" placeholder="<?=$id?>" disabled></td>
            </tr>
            <tr>
                <td>비밀번호</td>
                <td><input type="password" name="passwd" size="20" value="<?=$row['passwd']?>" required></td>
            </tr>
            <tr>
                <td>이름</td>
                <td><input type="text" name="name" size="20" value="<?=$row['name']?>" required></td>
            </tr>
            <tr>
                <td>전화번호</td>
                <td><input type="text" name="tel" size="20" value="<?=$row['tel']?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="수정하기">
                </td>
            </tr>
        </table>
        <input type="hidden" name="id" value="<?=$id?>">
    </form>
    
</body>
</html>