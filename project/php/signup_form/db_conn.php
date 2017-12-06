<?php

    

    $db_user = 'root';
    $db_pass = '';
    $db_host = 'localhost';
    $db_name = 'mytest';
    $db_type = 'mysql';
    $dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8"; //dns(data source name) 접속 대상 데이터베이스의 종류나 서버명을 기술하는 문자열, '접속대상유형:host=서버명;dbname=데이터베이스명;charset=문자 인코딩'(mysql연결 방식, sqlite는 다른 방식으로 서술)
    try{
        $pdo = new PDO($dsn, $db_user,$db_pass); //pdo(dns, 사용자명, 패스워드)
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //setAttribute : 데이터베이스를 접속할 때의 설정이나 sql문을 실행할때 동작등 데이터베이스 핸들의 속성을 변경하기 위한 메소드
        //1인수 : 변경하려는 속성 , 2인수 : 값
        //PDO::ATTR_ERRMODE : 오류가 발생했을 경우의 보고 방법 설정
        //PDO::ERRMODE_EXCEPTION : PDO::ERRMODE_SILENT(오류코드를 객체에 설정) + PDOException 예외를 발생시킴
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //prepared statement의 에뮬레이션을 비활성화 (pdo 객체에서 돌리는것을 방지)
        //echo "접속 완료<br>";
    }catch(PDOException $e){
        die('오류 : $e->getMessage()');
    }