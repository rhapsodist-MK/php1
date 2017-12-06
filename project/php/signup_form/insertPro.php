<?php
    require_once 'db_conn.php';

    $id = $_REQUEST['id']; //get,post 방식 모두 사용가능, 배열형태로 get, post, cookie 순으로 _REQUEST 변수로 저장됨
    $passwd = $_REQUEST['passwd'];
    $name = $_REQUEST['name'];
    $tel = $_REQUEST['tel'];

    $url = explode('?', basename($_SERVER["HTTP_REFERER"]));
    //$_SERVER["HTTP_REFERER"] //전페이지 URL을 반환
    //basename /을 기준으로 가작 마지막/를 만난 다음 문자열을 돌려줌
    //explode ? 를 기준으로 쪼개서 배열로 반환
    echo $url[0];
    try{
        $pdo->beginTransaction(); //auto commit 모드를 끄는 매소드 pdo::commit() 을 호출하여 트랜잭션을 종료할때까지 commit되지 않음  //변동사항이 있을경우에만 사용하면 됨
        
        if($url[0] == 'insertForm.php'){
            $sql = "insert into logintest(id, passwd, name, tel, reg_date)
                values(:id, :passwd, :name, :tel, now())";
        }elseif($url[0] == 'updateForm.php'){
            $sql = "UPDATE logintest SET passwd=:passwd, name=:name, tel=:tel WHERE id=:id";
        }
        $stmh  = $pdo->prepare($sql); //실행하려는 sql문을 지정하고 pdo statement 객채를 생성
        $stmh->bindValue(':passwd', $passwd, PDO::PARAM_STR);
        $stmh->bindValue(':name', $name, PDO::PARAM_STR);
        $stmh->bindValue(':tel', $tel, PDO::PARAM_STR);
        $stmh->bindValue(':id', $id, PDO::PARAM_STR);
        $stmh->execute();
        $pdo->commit(); //transcation 종료 (commit);
        
        header("Location:./list.php");
    }catch(PDOException $e){
        die('오류 : ' . $e->getMessage());
    }