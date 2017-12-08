<?php
    //가장 중요한 함수
    session_start();    //세션 실행
    define('DS', DIRECTORY_SEPARATOR);  //define : 상수정의 (이름, 넣을 값)  DIRECTORY_SEPARATOR : 디렉토리 구분자 (ex> \ , /)
    define('ROOT', dirname(__FILE__));  //dirname : 현제디렉토리path, __FILE__ : 현재 파일 path(파일명 포함);
    
    //.htaccess에서 모든 path의 값을들 index.php로 보내게 설정되있음
    //$_SERVER['PATH_INFO'] : 서버상의 현재 디렉토리까지의 path
    //ltrim : 문자열 앞에 존재하는 공백이나 다른 문자를 제거
    //explode : 첫번째 매개변수를 기준으로 string을 분배해서 저장
    $url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

    require_once(ROOT . DS . 'core' . DS. 'bootstrap.php'); // ..\core\bootstrap.php