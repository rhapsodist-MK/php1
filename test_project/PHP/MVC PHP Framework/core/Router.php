<?php
    class Router{
        public static function route($url){
            dnd($url); // helpers에 존재하는 함수 //bootstrap에서 route 함수를 호출했지만 bootstrap안에서 functions.php 를 로드하고있고 functions.php가 helpers.php 를 로드 하고 있기 때문에 사용 가능
        }
    }