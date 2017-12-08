<?php
    class Router{
        public static function route($url){
            //dnd($url); // helpers에 존재하는 함수 //bootstrap에서 route 함수를 호출했지만 bootstrap안에서 functions.php 를 로드하고있고 functions.php가 helpers.php 를 로드 하고 있기 때문에 사용 가능
            
            //controller
            $controller = (isset($url[0]) && $url[0] != '') ? ucwords($url[0]) : DEFAULT_CONTROLLER;
            //ucwords : 매 단어의 첫번째 단어를 대문자로 변환
            $controller_name = $controller;
            array_shift($url); //array_shift : 배열의 맨 앞에 있는 원소를 시프트
            
            //action
            $action = (isset($url[0]) && $url[0] != '') ? $url[0] . 'Action' : 'indexAction';
            //ucwords : 매 단어의 첫번째 단어를 대문자로 변환
            $action_name = $controller;
            array_shift($url); //array_shift : 배열의 맨 앞에 있는 원소를 시프트
            
            //parems
            $queryParams = $url;
            
            $dispatch = new $controller($controller_name, $action);
            
            dnd($dispatch);
            
            if(method_exists($controller, $action)){ //클래스 매소드가 존재하는지 확인 //controller 이름의 클래스에 $action 이름의 매소드가 있느냐
                call_user_func_array([$dispatch, $action], $queryParams); //call a callback with an array of parameters  1인수 : the callable to be called. 2인수 the parameters to be passed to the callback, as an indexed array
                // == $dispatch->registerAction($queryParams);
            }else{
                dis('That method does not exist in the controller \"' . $controller_name . '\"');
            }
            
        }
    }